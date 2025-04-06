<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Builder as ComponentsBuilder;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Notifications\Notification;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\HtmlString;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use Pboivin\FilamentPeek\Forms\Actions\InlinePreviewAction;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

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
            Block::make('image')->schema([
              FileUpload::make('images')
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
                Tabs::make('Tabs')->contained(false)
                ->tabs([
                    Tabs\Tab::make('Setup')
                        ->schema([
                            Wizard::make([
                                Wizard\Step::make('Name Menu')
                                    ->beforeValidation(function ($state, $component) {
                                        if (empty($state['menu_id'])) {
                                            Notification::make('Menu is empty')->danger()->title('Error')->send();
                                            return $state;
                                        }
                                    })

                                    ->schema([
                                        Select::make('menu_id')->required()->label('Menus')->selectablePlaceholder(true)
                                            ->relationship(
                                                name: 'menus',
                                                modifyQueryUsing: fn (Builder $query) => $query->where('type', 'page')->whereNotIn('id', Page::query()->pluck('menu_id')->toArray()),
                                                titleAttribute: 'name')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function ($state, callable $set) {
                                                $menu = \App\Models\Menu::find($state);
                                                if ($menu) {
                                                    $set('slug', $menu->slug); // Set hasil query
                                                    $set('title', $menu->name); // Set hasil query
                                                }
                                            }),

                                        Fieldset::make('Roles')
                                            ->schema([
                                                Placeholder::make('Roles Selected Menus')
                                                ->content( 'Desc')
                                            ]),

                                    ]),
                                Wizard\Step::make('Content')
                                    ->schema([
                                        Fieldset::make('Title and Categori')
                                        ->schema([
                                            TextInput::make('title'),
                                            Select::make('categori_id')->relationship('category', 'name')->preload()->searchable(),
                                        ]),

                                        Hidden::make('created_by')->default(auth()->user()->id),
                                        Hidden::make('slug'),

                                        Fieldset::make('Active and Publish')
                                        ->schema([
                                            DatePicker::make('publish_at')->label('Publish At'),
                                            ToggleButtons::make('is_active')->boolean()->label('Is Active')->inline(),

                                        ]),
                                    ]),

                            ])
                        ]),
                    Tabs\Tab::make('Value Content')
                        ->schema([
                            Fieldset::make('Value Content')->schema([
                                Select::make('layout')
                                ->live(onBlur: true)->required()->afterStateUpdated(fn (Set $set, ?string $state) => $set('view', $state))
                                ->options([
                                    'default' => 'Default',
                                    'model-1' => 'model-1',
                                    'model-2' => 'model-2',
                                    'model-3' => 'model-3',
                                    'model-4' => 'model-4',
                                    'model-5' => 'model-5',
                                    'model-6' => 'model-6',
                                ]),
                                Placeholder::make('view')->live()
                                ->content(fn (Get $get) => new HtmlString($get('layout'))),
                            ]),
                          

                            Actions::make([
                                InlinePreviewAction::make()
                                    ->label('Live Preview')
                                    ->builderName('content'),
                            ])
                                ->columnSpanFull()
                                ->alignEnd(),
                                self::contentBuilderField(),

                        ]),

                    ]),
                //

            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('created_at')->since()
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
