<table class="table table-responsive" id="articles-table">
    <thead>
        <tr>
            <th>Art Title</th>
        <th>Art Tag</th>
        <th>Art Description</th>
        <th>Art Keywords</th>
        <th>Art Content</th>
        <th>Art Thumb</th>
        <th>Art Time</th>
        <th>Art Editor</th>
        <th>Art View</th>
        <th>Cate Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{!! $article->art_title !!}</td>
            <td>{!! $article->art_tag !!}</td>
            <td>{!! $article->art_description !!}</td>
            <td>{!! $article->art_keywords !!}</td>
            <td>{!! $article->art_content !!}</td>
            <td>{!! $article->art_thumb !!}</td>
            <td>{!! $article->art_time !!}</td>
            <td>{!! $article->art_editor !!}</td>
            <td>{!! $article->art_view !!}</td>
            <td>{!! $article->cate_id !!}</td>
            <td>
                {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('articles.show', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('articles.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>