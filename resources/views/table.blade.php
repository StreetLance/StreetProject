
<table id="tab1"  data-content="1" class="table table-dark text-center">
    <thead>
    <tr >
        <th scope="col">№ Заказа</th>
        <th scope="col">Имя товара</th>
        <th scope="col">Цена</th>
        <th scope="col">Количество</th>
        <th scope="col">Имя оператора</th>
    </tr>
    </thead>
    <tbody>

 @foreach($inform as $info)
      <tr>
          <th scope="row">{{$info->id}}</th>
          <td>{{$info->name}}</td>
          <td>{{$info->price}}</td>
          <td>{{$info->count}}</td>
          <td>{{$info->fio}}</td>
      </tr>
  @endforeach
    </tbody></table>





