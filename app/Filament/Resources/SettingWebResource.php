<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingWebResource\Pages;
use App\Filament\Resources\SettingWebResource\RelationManagers;
use App\Models\SettingWeb;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\Builder as ComponentsBuilder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\View;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class SettingWebResource extends Resource
{
    protected static ?string $model = SettingWeb::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationName = 'Pengaturan';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Fieldset::make('Setup')->schema([
                Select::make('key')
                ->label('View')
                ->helperText('Select the view you want to use')
              
                ->options(function ($get) {
                    $usedKeys = SettingWeb::pluck('key')->toArray();
                    $allOptions = [
                        'hero-section' => 'Hero',
                        'team-section' => 'Team',
                        'welcome' => 'View welcome',
                        'app' => 'App name',
                        'copyright' => 'Copyright',
                        'footer' => 'Footer',
                        'contact' => 'Contact',
                        'social' => 'Social',
                        'address' => 'Address',
                        'phone' => 'Phone',
                        'email' => 'Email',
                        'section-1' => 'Section 1',
                        'section-2' => 'Section 2',
                        'section-3' => 'Section 3',
                        'section-4' => 'Section 4',
                        'section-5' => 'Section 5',
                        'section-6' => 'Section 6',

                    ];
                    $currentKey = $get('key');
                    if ($currentKey && !in_array($currentKey, $usedKeys)) {
                        // aman, tidak perlu ubah
                    } elseif ($currentKey && in_array($currentKey, $usedKeys)) {
                        // hapus dari usedKeys agar tetap tampil
                        $usedKeys = array_diff($usedKeys, [$currentKey]);
                    }
                    return collect($allOptions)
                        ->reject(fn ($label, $key) => in_array($key, $usedKeys))
                        ->toArray();
                })
                ->selectablePlaceholder($currentKey ?? 'Select a view')
                ->disabled(fn ($record) => filled($record))
                ->required(),
                ToggleButtons::make('status')->boolean()->label('Is Active')->inline(),
                ComponentsBuilder::make('value')->label('Isi Content')
                ->collapsible(true)
                ->helperText('Select the view you want to use')
                ->blocks([
                    Block::make('view')
                    ->schema([
                        TextInput::make('section-view')
                            ->label('Section View / Model View')
                            ->required(),
                        Select::make('model-view')
                            ->label('Model View')
                            ->options([
                                'carousel' => 'View carousel',
                                'card' => 'View card',
                                'list' => 'View list',
                                'widget' => 'View widget',
                                'table' => 'View table',
                                'grid' => 'View grid',
                                'list-card' => 'View list card',    
                            ])
                            ->required(),
                    ])
                    ->columns(2),
                    Block::make('image')->label('Image / Gambar')
                    ->schema([
                     
                        FileUpload::make('images')
                            ->label('Gambar')
                            ->disk('public')
                            ->visibility('public')
                            ->maxFiles(1)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(1024)
                            ->directory('setting-web-gambar')
                    ])
                    ->columns(1),
                    Block::make('team')->label('Team / Person Member')
                    ->schema([
                        FileUpload::make('images')
                            ->label('Gambar')
                            ->disk('public')
                            ->visibility('public')
                            ->maxFiles(1)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(1024)
                            ->previewable()
                            ->directory('setting-web-gambar-team'),
                        TextInput::make('name')
                            ->label('Nama')
                            ->required(),
                        TextInput::make('title')
                            ->label('Jabatan')
                            ->required(),
                        TextInput::make('mail')
                            ->label('Email')
                            ->required(),
                    ])
                    ->columns(1),
                    Block::make('heading')
                        ->label('Title / Judul')
                        ->schema([
                            TextInput::make('content')
                                ->label('Title')
                                ->required(),
                            TextInput::make('sub_content')
                                ->label('Deskripsi')
                                ->required(),
                        ])
                        ->columns(2),
                    Block::make('paragraph')->label('Paragraph / Isi Content')
                        ->schema([
                            Textarea::make('content')
                                ->label('Paragraph')
                                ->required(),
                        ]),
                    Block::make('key')->label('json array')
                        ->schema([
                            TextInput::make('keys')
                            ->label('Keys')
                            ->required(),
                            TextInput::make('content')
                            ->label('Body')
                            ->required(),
                        ])->columns(2),
                    Block::make('link')->label('Link / URL / Button')
                        ->schema([
                            TextInput::make('title')
                            ->label('Title')
                            ->required(),
                            TextInput::make('route')
                            ->prefix('https://')
                            ->label('route / URL / Button')
                            ->required(),   
                        ])->columns(2),
                 
                    Block::make('desc')->label('Description')
                        ->schema([
                            TextInput::make('desc')
                            ->label('Description')
                            ->required(),
                        ])->columns(1),

                ])->columnSpanFull(),
            ])

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')->label('Title')->sortable()->searchable(),
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
            'index' => Pages\ListSettingWebs::route('/'),
            'create' => Pages\CreateSettingWeb::route('/create'),
            'edit' => Pages\EditSettingWeb::route('/{record}/edit'),
        ];
    }
}
