<?php

use function Livewire\Volt\{state};
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Schedule;

state(
    name: '',
    service_id: '',
    date: '',
    schedule_id: '',
    services: Service::all(),
    schedules: Schedule::all()
);

$addAppointment = function () {
    Appointment::create([
        'clientName' => $this->name,
        'service_id' => $this->service_id,
        'date' => $this->date,
        'status_id' => 1,
        'schedule_id' => $this->schedule_id,
    ]);
    $this->name = '';
    $this->service_id = '';
    $this->date = '';
    $this->schedule_id = '';
    // Emite un evento con el mensaje
    $this->dispatch('appointmentAdded', message: 'La cita se ha agendado con éxito!');
};


?>

<div class="text-[#030405] | mt-5 p-1">
    <div class="w-[10rem] md:w-[14.375rem] | bg-[#D9D9D9]/80 | rounded-t-lg | p-3">
        <p class="text-xl text-center">Quiero una cita</p>
    </div>
    <form wire:submit='addAppointment'>
        <div
            class="grid grid-cols-2 lg:grid-cols-5 gap-4 | min-h-[55px] | bg-[#D9D9D9]/70 | rounded-tr-lg rounded-br-lg rounded-bl-lg">

            <input type="text" placeholder="Nombre"
                class="block px-4 py-3 text-base border-[#D9D9D9]/0 rounded-lg bg-inherit" wire:model="name"
                wire:change="$refresh" required>

            <select class="block px-4 py-3 text-base border-[#D9D9D9]/0 rounded-lg bg-inherit" wire:model="service_id"
                wire:change="$refresh" :disabled={{ $name == '' }}>
                <option value="" selected>Servicio</option>
                @foreach ($services as $item)
                    <option value="{{ $item->id }}">{{ $item->service }}</option>
                @endforeach
            </select required>

            <input type="date" placeholder="Fecha" min="{{ now()->addDay()->format('Y-m-d') }}"
                class="block px-4 py-3 text-base border-[#D9D9D9]/0 rounded-lg bg-inherit" wire:model="date"
                wire:change="$refresh" :disabled={{ $service_id == '' }}>


            <select class="block px-4 py-3 text-base border-[#D9D9D9]/0 rounded-lg bg-inherit" wire:model="schedule_id"
                >
                <option value="" selected>Horario</option>
                @foreach ($schedules as $time)
                    <option value="{{ $time->id }}">{{ $time->schedule }}</option>
                @endforeach
            </select>

            <button type="submit"
                class="h-full w-full | text-white bg-[#365045]/90 hover:bg-[#365045] focus:ring-4 focus:ring-[#365045]/30 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 col-span-2 lg:col-span-1">
                ¡Agendar Cita!
            </button>
        </div>

    </form>
</div>
