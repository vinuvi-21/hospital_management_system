
<div>
    @if ($successMessage ?? '')
    <flux:callout variant="success" icon="check-circle">
        {{ $successMessage }}
    </flux:callout>
@endif

    <form wire:submit="save">
         <flux:input wire:model="name" label="Full Name" placeholder="Enter full name." />
         <flux:input wire:model="nic" label="NIC" placeholder="Enter NIC number." />
         <flux:input wire:model="email" label="Email" placeholder="Enter email." />
         <flux:input wire:model="phone_number" label="Phone number" placeholder="Enter phone number." />
         <flux:input wire:model="age" label="Age" placeholder="Enter age." />

         <flux:select wire:model="gender" placeholder="Choose gender...">
            <flux:select.option>Male</flux:select.option>
            <flux:select.option>Female</flux:select.option>
         
        </flux:select>

        <flux:select wire:model="specialization" placeholder="Choose specialization...">
            <flux:select.option>Cardiology</flux:select.option>
            <flux:select.option>Endocrinology</flux:select.option>
            <flux:select.option>Gastroenterology</flux:select.option>
            <flux:select.option>Hematology</flux:select.option>
            <flux:select.option>Neurology</flux:select.option>
     
        </flux:select>

        <flux:input wire:model="doc_name" label="Doctor name" placeholder="Enter doctor name" />

        <flux:input wire:model="date" label="Date" type="date" />
        <flux:input wire:model="time" label="Time" type="time" />

        <flux:button type="submit" loading="false">
    Save changes
</flux:button>

    </form>

</div>