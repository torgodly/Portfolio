<?php

namespace App\Filament\Pages;

use App\Models\About;
use Filament\Actions\Action;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class AboutPage extends Page implements HasForms
{
    use \Filament\Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'About';
    protected static string $view = 'filament.pages.about-page';
    public $data;
    public $hero;


    public function mount(): void
    {
        $this->data = About::first();
        $this->form->fill($this->data?->toArray() ?? []);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([Grid::make(3)->schema([
                TextInput::make('slogan')
                    ->string()
                    ->required()
                    ->maxLength(255),
                TextInput::make('title')
                    ->string()
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                TextInput::make('address')
                    ->string()
                    ->required()
                    ->maxLength(255)->columnSpanFull(),
                ColorPicker::make('hsl_color')
                    ->hsl(),
                ColorPicker::make('hsl_color')
                    ->hsl(),
                ColorPicker::make('hsl_color')
                    ->hsl(),
                SpatieMediaLibraryFileUpload::make('hero')->collection('hero')->image()->columnSpanFull()->required(),
                SpatieMediaLibraryFileUpload::make('about')->collection('about')->image()->columnSpanFull()->required(),])])->model(About::first())->statePath('data');


    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
            dd($data);
            About::updateOrCreate(
                ['id' => 1], // Search criteria
                $data // Values to update or create
            );
            $this->form->model(About::first())->saveRelationships();
        } catch (Halt $exception) {
            return;
        }

        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }
}
