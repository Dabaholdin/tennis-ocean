$('.request-trening').click(function(req){
    console.log($(this).data('trening'));
    $('body').append(
        `<form class="trening-request-form" method="{{auth()->user()->id}}">
        </form>
        `
    );
})