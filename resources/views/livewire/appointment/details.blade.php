<?php

use function Livewire\Volt\{state};
use App\Models\Appointment;

state(searchParam: '', appointment: '');

$searchAppointment = function () {
    $this->appointment = Appointment::where('clientName', $this->searchParam)
        ->join('services', 'appointments.service_id', '=', 'services.id')
        ->join('status', 'appointments.status_id', '=', 'status.id')
        ->leftjoin('users', 'appointments.user_id', '=', 'users.id')
        ->select('appointments.*', 'services.service', 'status.status', 'status.color', 'users.name')
        ->get();
};

?>

<div>
    <form wire:submit.prevent='searchAppointment'>
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Buscar cita</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Número de cita / Nombre de cliente" wire:model='searchParam' required>
            <button type="submit"
                class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Buscar</span>
            </button>
        </div>
    </form>

    <div class="py-14">
        @if ($appointment && !$appointment->isEmpty())
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Servicio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Estilista
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    @foreach ($appointment as $app)
                        <tr>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $app->clientName }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $app->service }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $app->date }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($app->name)
                                {{ $app->name }}
                                @else
                                Todavía no se asigna un estilista
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <span class="bg-{{$app->color}}-100 text-{{$app->color}}-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">{{ $app->status }}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            @if ($searchParam)
                <p class="text-center text-xl">No se encontraron citas para '{{ $searchParam }}'.</p>
            @endif

        @endif
    </div>

</div>
