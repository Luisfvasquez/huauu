<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>producto</title>
</head>
<body>
    
    <script>
        Echo.channel(`producto.${this.order.id}`)
    .listen('CompraFinalizada', (e) => {
        console.log(e.order.name);
    });
    </script>


    <h1>producto</h1>
{{-- 
    <pre>{{ print_r($inventory, true) }}</pre> --}}
    <h2>Productos en el inventario</h2>
    <h3>Nombre del producto</h3>
    <p>{{ $producto->products->name_product }} </p>
    <ul>
       <li>{{$producto->product_id}} </li>
       <li>{{$producto->stock}} </li>
    </ul>


</body>
</html>