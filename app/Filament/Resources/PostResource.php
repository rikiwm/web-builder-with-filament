<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Builder as ComponentsBuilder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Pboivin\FilamentPeek\Forms\Actions\InlinePreviewAction;
use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

     public static function contentBuilderField(string $context = 'form'): ComponentsBuilder
    {
        return ComponentsBuilder::make('content')->blocks([
            Block::make('heading')->schema([
                Grid::make($context === 'priview' ? 1 : 2)->schema([
                                 TextInput::make('title')
                                        ->label('Heading')
                                        ->required(),
                                    Select::make('level')
                                        ->options([
                                            'h1' => 'Heading 1',
                                            'h2' => 'Heading 2',
                                            'h3' => 'Heading 3',
                                            'h4' => 'Heading 4',
                                            'h5' => 'Heading 5',
                                            'h6' => 'Heading 6',
                                        ]),
                    Checkbox::make('uppercase')
                        ->columnSpanFull(),
                ]),

            ]),
            Block::make('paragraph')->schema([
                RichEditor::make('content')
                ->disableGrammarly()
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h1',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ]),
                
            ]),
            Block::make('image')->schema([
                FileUpload::make('content')
                ->disk('public')
                ->label('Image / File')
                ->maxFiles(2)
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp','application/pdf','application/docx'])
                ->directory('post_image')
                ->visibility('public')
            ]),
            Block::make('link')->label('Link / URL / Button')
            ->schema([
                TextInput::make('title')
                ->label('Title')
                ->required(),
                TextInput::make('link')
                ->prefix('https://')
                ->label('route / URL / Button')
                ->required(),   
            ])->columns(2),
            Block::make('other')->label('Description')
            ->schema([
                Textarea::make('other')
                ->label('Info')
                ->autosize(),                
            ])->columns(1),
            Block::make('key')->label('key')
            ->schema([
                KeyValue::make('meta')              
            ])->columns(1),
        ])
            ->columnSpanFull()
            ->collapsible();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Section::make('Tutorials')->icon('heroicon-o-document-text')->collapsed()->schema([
                    Placeholder::make('Tutorials')
                    ->content(new HtmlString('Tutorials : <a href="https://filamentphp.com/docs/2.x/components/forms/wizard" target="_blank" class="underline">Klik Link</a>')),
                ]),
                Wizard::make([
                    Wizard\Step::make('Post')
                    ->icon('heroicon-m-newspaper')
                    ->description('Pilih Menu untuk postingan')
                        ->schema([

                            Select::make('menu_id')->required()->label('Menu')->helperText('Pilih Menu Sesuai Jenis Postingan')
                                ->relationship(
                                    name: 'menu',
                                    modifyQueryUsing: fn (Builder $query) => $query->where('type', 'list'),
                                    titleAttribute: 'name')
                                ->live(onBlur: true)
                ->disabled(fn ($record) => filled($record))

                                ->afterStateUpdated(function ($state, callable $set) {
                                    $menu = \App\Models\Menu::find($state);
                                    if ($menu) {
                                        $set('sub_title', $menu->name); // Set hasil query
                                    }
                                }),

                            // ->createOptionForm([
                            //     Forms\Components\TextInput::make('title')
                            //         ->required(),
                            //     Forms\Components\TextInput::make('desc')
                            //         ->required()
                            // ]),
                        ]),
                    Wizard\Step::make('Description')
                    ->icon('heroicon-m-list-bullet')
                    ->description('Buat Description untuk postingan')
                        ->schema([
                            Section::make('Heading')
                                ->description('')
                                ->schema([
                                    TextInput::make('title')->live(onBlur: true)->required()
                                    ->columnSpanFull()->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                    TextInput::make('sub_title')->label('Short Title'),
                                Select::make('categori_id')->relationship('categori', 'name')->preload()->searchable()->required(),
                                    
                                ])
                                ->columns(2),
                                FileUpload::make('image')
                                ->disk('public')
                                ->label('Cover Image')
                                ->image()
                                ->maxFiles(1)
                                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                ->directory('post_thumbnail_image')
                                ->visibility('public'),
                            Hidden::make('created_by')->default(auth()->user()->id),
                            Hidden::make('slug'),
                      
                            // RichEditor::make('content')->columnSpanFull()->required(),
                        ])->columns(2),
                    Wizard\Step::make('Content')
                    ->icon('heroicon-m-list-bullet')
                    ->description('Buat Content postingan')
                        ->schema([
                            Actions::make([
                                InlinePreviewAction::make()
                                    ->label('Live Preview Content')
                                    ->builderName('content'),
                            ])
                                ->columnSpanFull()
                                ->alignEnd(),
                                self::contentBuilderField(),

                        ]),
                    ]),
                Split::make([

                    Fieldset::make('Status')
                    ->schema([
                        Toggle::make('is_active')->required(),
                        Toggle::make('is_featured')->label('Featured'),
                        DatePicker::make('published_at')->label('Published')->required()->inlineLabel()->default(now()),

                        // DateTimePicker::make('published_at')
                        // ->hidden(fn (Get $get) => $get('status') !== 'published'),
                    ])->grow(true)->columns(4),
                ])->from('md'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('categori.name')->sortable()->badge()->color('gray')->searchable(),
                TextColumn::make('menu.name')->sortable()->badge()->color('secondary')->searchable()->label('Type'),
                ToggleColumn::make('is_active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
