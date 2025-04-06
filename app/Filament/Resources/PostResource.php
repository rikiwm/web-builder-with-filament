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
                    ->toolbarButtons(['bold', 'italic']),
            ]),

        ])
            ->columnSpanFull()
            ->collapsible();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([

                Wizard::make([
                    Wizard\Step::make('Post')
                        ->schema([

                            Select::make('menu_id')->required()->label('Menu')
                                ->relationship(
                                    name: 'menu',
                                    modifyQueryUsing: fn (Builder $query) => $query->where('type', 'list'),
                                    titleAttribute: 'name')
                                ->live(onBlur: true)
                                ->afterStateUpdated(function ($state, callable $set) {
                                    $menu = \App\Models\Menu::find($state);
                                    if ($menu) {
                                        // $set('slug', $menu->slug); // Set hasil query
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
                        ->schema([
                            Section::make('Heading')
                                ->description('')
                                ->schema([
                                    TextInput::make('title')->live(onBlur: true)->required()
                                    ->columnSpanFull()->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                    TextInput::make('sub_title')->label('Short Title'),
                                Select::make('categori_id')->relationship('categori', 'name')->preload()->searchable(),
                                    
                                ])
                                ->columns(2),
                            Hidden::make('created_by')->default(auth()->user()->id),
                            Hidden::make('slug'),
                      
                            // RichEditor::make('content')->columnSpanFull()->required(),
                        ])->columns(2),
                    Wizard\Step::make('Content')
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
                        Toggle::make('is_featured'),
                        DatePicker::make('published_at')->label('Published')->required()->inlineLabel(),

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
