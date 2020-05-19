<table class="table table-striped">
    <tbody>
    	<tr>
          <th style="width: 10px">#</th>
          <th>Name</th>
          <th>Operation</th>
        </tr>
        @forelse($amenities as $index => $amenity)
            <tr>
              <td>{{ ++$index }}</td>
              <td>
              	{{ $amenity->name }}
              </td>
              <td>
              	<a 
              		data-route="{{ route('admin.amenities.update', $amenity->id) }}"
              		data-data="{{ $amenity->toJson() }}"
              		data-toggle="modal"
              		data-target="#editAmenityModal">
              		<i class="fa fa-edit"></i>
              	</a>
				        {!! getDeleteForm(route('admin.amenities.destroy', $amenity->id), "Delete amenity ({$amenity->name})?", "Are you sure you want to delete this amenity ({$amenity->name})", 'btn btn-flat ink-reaction text-danger', 'fa fa-archive') !!}
              </td>
            </tr>
        @empty

        @endforelse
    </tbody>
</table>
<div class="pull-right">
	{{ $amenities->appends(request()->query())->links() }}
</div>
