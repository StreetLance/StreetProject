<table id="tab2" class="table table-dark text-center">
    <thead>
    <tr>
        <th scope="col">Имя товара</th>
        <th scope="col">Количество товара</th>
        <th scope="col">Сумма</th>
    </tr>
    </thead>
    <tbody>

    @foreach($query as $info)
        <tr>
            <td>{{$info->name}}</td>
            <td>{{$info->count}}</td>
            <td>{{$info->price}}</td>
        </tr>
    @endforeach



    </tbody>
</table>
