<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Welcome and Have a Great Day, :Name!', ['name' => Auth::user()->name]) }}
                </div>
                <div class="p-6 text-justify text-gray-900 dark:text-gray-100">
                    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        Detss Vapehouse
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris ipsum, pellentesque eu
                        interdum in, pellentesque ut diam. Vestibulum ante ipsum primis in faucibus orci luctus et
                        ultrices posuere cubilia curae; Mauris velit odio, lobortis sit amet luctus quis, tincidunt
                        porta nisl. Curabitur est odio, rhoncus ut diam in, convallis accumsan magna. Fusce magna
                        tortor, ornare vel nulla eget, ultricies semper metus. Duis sed gravida ipsum, sit amet commodo
                        risus. Phasellus pretium commodo ante, et fringilla diam semper non. Fusce tempus erat at libero
                        scelerisque suscipit. Duis facilisis consequat leo, quis convallis lorem iaculis vel. Fusce sed
                        aliquet erat.</p>
                        <p>
                        Donec iaculis vulputate iaculis. Sed laoreet porttitor viverra. Donec sit amet orci non sem
                        vestibulum malesuada. Donec mi diam, facilisis in feugiat efficitur, maximus ac ligula.
                        Phasellus sapien dui, eleifend sit amet sem at, sodales volutpat tortor. Mauris a lacinia diam,
                        mattis blandit nulla. Sed a tempor libero, vel ornare turpis. Nulla congue porttitor nunc,
                        posuere tempus est suscipit aliquam. Integer sed justo in nisl fermentum rutrum vitae et elit.
                        Morbi sit amet erat vitae nulla posuere pellentesque eu sollicitudin risus. Etiam non est
                        efficitur, feugiat sapien rhoncus, rhoncus lorem. Nunc eleifend sollicitudin enim, aliquam
                        feugiat nulla convallis non. Integer commodo sem ante, ac facilisis erat cursus nec. Etiam
                        tempus interdum tincidunt. Nulla in urna non tortor ultricies ultrices sit amet quis mi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
