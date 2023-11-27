<?php

use function Livewire\Volt\{state};
use App\Models\Appointment;
state(name: '', service: '', date: '', schedule: '');
$addAppointment = function () {
    Appointment::create([
        'clientName' => $this->name,
        'service' => $this->service,
        'date' => $this->date,
        'status' => $this->schedule,
    ]);
    $this->name = '';
    $this->service = '';
    $this->date = '';
    $this->schedule = '';
    // Emite un evento con el mensaje
    $this->dispatch('appointmentAdded', message: 'La cita se ha agendado con éxito!');
};

?>

<div>

    <form wire:submit='addAppointment'>
        <div class="grid gap-6 mb-6 grid-cols-1 lg:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                <input type="text" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="John Doe" wire:model="name" required>
            </div>

            <div>
                <label for="service" class="block mb-2 text-sm font-medium text-gray-900">Servicio</label>
                <select id="service" wire:model='service'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Escoge un servicio</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>

            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Fecha</label>
                <input type="date" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="John Doe" wire:model="date" required>
            </div>
            <div>
                <label for="horario" class="block mb-2 text-sm font-medium text-gray-900">Horario</label>
                <select id="horario" wire:model='schedule'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Escoge un horario</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
            <div>
                <label for="stylist" class="block mb-2 text-sm font-medium text-gray-900">Estilista</label>
                <select id="stylist" {{-- wire:model='stylist' --}}
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Escoge un estilista</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
            <div>
                <label for="notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notas</label>
                <textarea id="notes" rows="1"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Ej. Cabello seco, marca en especial o tratos especiales"></textarea>

            </div>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>

</div>
