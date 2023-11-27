<div class="mt-14">
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
            data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg text-sm md:text-lg" id="addAppointment-tab" data-tabs-target="#addAppointment"
                    type="button" role="tab" aria-controls="addAppointment" aria-selected="false">Agendar una cita</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 text-sm md:text-lg"
                    id="appointmentDetails-tab" data-tabs-target="#appointmentDetails" type="button" role="tab"
                    aria-controls="appointmentDetails" aria-selected="false">Detalles de mi cita</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="addAppointment" role="tabpanel"
            aria-labelledby="addAppointment-tab">
            @livewire('appointment.add')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="appointmentDetails" role="tabpanel"
            aria-labelledby="appointmentDetails-tab">
            @livewire('appointment.details')
        </div>
    </div>
</div>
