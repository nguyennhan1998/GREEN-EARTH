<script data-cfasync="false" src="{{asset("../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js")}}"></script>
<script type="text/javascript" src="{{asset("script/jquery.js")}}"></script>
<script type="text/javascript" src="{{asset("script/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset("script/slick.slider.min.js")}}"></script>
<script type="text/javascript" src="{{asset("script/jquery.countdown.min.js")}}"></script>
<script type="text/javascript" src="{{asset("script/fancybox.pack.js")}}"></script>
<script type="text/javascript" src="{{asset("script/isotope.min.js")}}"></script>
<script type="text/javascript" src="{{asset("script/progressbar.js")}}"></script>
<script type="text/javascript" src="{{asset("script/counter.js")}}"></script>
<script type="text/javascript" src="{{asset("https://maps.googleapis.com/maps/api/js")}}"></script>
<script type="text/javascript" src="{{asset("script/functions.js")}}"></script>
<script type="text/javascript">
    function addToCart(productId) {
        $.ajax({
            url:"{{url("/cart/add")}}/"+productId,
            method:"POST",
            data:{
                qty: 1,
                _token:"{{csrf_token()}}"
            },
            success: function () {
                alert("Mua sản phẩm thành công!");
            }
        });
    }
</script>


<script type="text/javascript">
    $('#search').on('keyup', function () {
        let value = $(this).val();
        console.log(value);
        $.ajax({
            type: 'get',
            url: '{{ \Illuminate\Support\Facades\URL::to('search') }}',
            data: {'search': value},
            success: function (data) {
                console.log(data);
                if (value === "") {
                    return $('tbody').html("");
                } else {
                    return $('tbody').html(data);
                }
            }
        });
    });
    $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
    $(".search").bind("click", function () {
        $(".table__search").css('display', 'block');
    });
    $(".slider-area").bind("mouseout", function () {
        $(".table__search").css('display', 'none');
    }); </script>
