<table class="table table-responsive" id="products-table">
    <thead>
        <tr>
            <th>Sort Order</th>
        <th>Pic</th>
        <th>Title</th>
        <th>Description</th>
        <th>Introduction</th>
        <th>Isshow</th>
        <th>Istop</th>
        <th>Status</th>
        <th>Price</th>
        <th>Spec</th>
        <th>Create Time</th>
        <th>Update Time</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->sort_order !!}</td>
            <td>{!! $product->pic !!}</td>
            <td>{!! $product->title !!}</td>
            <td>{!! $product->description !!}</td>
            <td>{!! $product->introduction !!}</td>
            <td>{!! $product->isshow !!}</td>
            <td>{!! $product->istop !!}</td>
            <td>{!! $product->status !!}</td>
            <td>{!! $product->price !!}</td>
            <td>{!! $product->spec !!}</td>
            <td>{!! $product->create_time !!}</td>
            <td>{!! $product->update_time !!}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>