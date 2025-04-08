<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use BladeUI\Icons\Exceptions\CannotRegisterIconSet;
use Filament\Forms;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;


class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->columns([
            'default' => 1,
            'lg' => 1,
            'xl' => 1,
            '2xl' => 1
        ])
            ->schema([
                Section::make('Instructions')->icon('heroicon-o-document-text')->collapsible()->schema([
                    Placeholder::make('Tutorial')
                        ->content(new HtmlString('please visit <a href="https://filamentphp.com/docs/2.x/components/forms/wizard" target="_blank" class="underline">docs</a>')),
                ]),


                Split::make([
                    Section::make('Menus')->description('Prevent abuse by limiting the number of requests per period')->icon('heroicon-m-hand-raised')
                        ->schema([
                            TextInput::make('name')->live(onBlur: true)->required()->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                            TextInput::make('description')->label('Description')->placeholder('Description')->maxLength(255)->helperText('Optional'),
                            // TextInput::make('name')->required()->maxLength(255)->afterStateUpdated(function ($state, callable $set) {
                            // //     $set('slug', Str::slug($state));
                            // })->live(),
                            Select::make('parent_id')->relationship('parent', 'name')->preload()->searchable(),
                            Select::make('type')->required()->options([
                                'place' => 'place',
                                'page' => 'page',
                                'list' => 'list',
                                'link' => 'link',
                            ])->placeholder('Default is palce')->live(),

                        ]),
                        Section::make('Menus')->description('Prevent abuse by limiting the number of requests per period')
                                ->schema([
                            Select::make('icon')->options(Iconset::icon())->searchable(),
                            // Hidden::make('slug'),
                            TextInput::make('slug')->label('Route / Link / Slug ')
                            ->suffix('.com')->placeholder('jika link maka manual url')
                            ->readOnly(fn (Get $get) => $get('type') !== 'link')
                            ->live(),
                            Select::make('model_view')->options([
                                'card' => 'card',
                                'tabel' => 'tabel',
                            ])
                            ->disabled(fn (Get $get) => $get('type') !== 'list')
                            ->searchable()->label('List Card / Table ')->suffix('view')
                            ->placeholder('jika link maka manual url'),
                                ])->grow(false),
                            ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->width('1%'),
                TextColumn::make('name'),
                TextColumn::make('type')
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}


Class Iconset
{
    public static function icon(): array
    {
        $jsonicon = file_get_contents(public_path('frontend/icon.json')); // path
        $files = json_decode($jsonicon, true); // Decode
        if ($files) {
            $icons = [];
            foreach ($files['icons'] as $key => $file) {
                $value = $file['name'] ?? '-';
                $new = Str::ucfirst(str_replace('_', ' ', $value));
                $icons[$value] = $new;

            }
        }

        return $icons;
    }
}
