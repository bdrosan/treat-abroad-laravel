@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h5 class="text-l font-semibold flex justify-between">
                <span>
                    {{ $countries->total() }} Cities
                </span>
                <a href="{{ route("admin.countries.create") }}" class=" px-2 py-1 rounded-md bg-green-500 text-white ">Create +</a>
                
            </h5>
            <!-- Table -->
            <div class="overflow-x-auto mt-2">
                <table class="min-w-full bg-white rounded-lg shadow-md">
                    <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-6 text-left">Id</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Icon markup</th>
                        <th class="py-3 px-6 text-left">Icon symbol</th>
                        <th class="py-3 px-6 text-left">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($countries as $country)
                    <tr class="border-b">
                        <td class=" px-6">{{ $country->id }}</td>
                        <td class=" px-6">{{ $country->name }}</td>
                        <td class=" px-6">
                            {!! $country->icon_markup !!}
                        </td>
                        <td class=" px-6">
                            {{ $country->icon_symbol }}
                        </td>
                        <td class=" px-6">
                            <a class="transition text-sm bg-blue-500 text-white shadow rounded p-1 hover:shadow-md hover:bg-blue-600" href="{{ route('admin.countries.edit', ['id' => $country->id]) }}">
                                Edit
                            </a>
                            <form class="inline" action="{{ route('admin.countries.destroy', ['id' => $country->id]) }}" method="post">
                                @csrf
                                <button class="bg-red-500 text-gray-50 p-2 py-1 m-1 rounded" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="paginate my-5">
                    {{ $countries->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection