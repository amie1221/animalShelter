<script type="text/javascript">
        $('body').on('keyup','#search', function(){
            var searchQuest = $(this).val();
            // console.log(searchQuest)
            $.ajax({
                method: 'POST',
                url: '{{ route("Adoptsearch") }}',
                dataType: 'json',
                data: {
                    '_token': '{{ csrf_token() }}',
                    searchQuest: searchQuest,
                },
                success: function(res){
                    // console.log(res)
                    var divContent = '';
                    $('#adopt').html('');

                    $.each(res, function(index, value){
                        divContent = '<div class="col-md-3"> <div class="thumbnail"><img src='+$value.aniImage+' alt='+value.aniName+' style="height:200px;max-width:200px;width: expression(this.width > 200 ? 200: true);"> <div class="caption"> <p><h5> Pet Name: <b>'+value.aniName+'</b></h5></p> Breed: <b>'+value.aniBreed+'</b><br> Size: <b>'+value.aniSize+'</b><br>    Color: <b>'+value.aniColor+'</b><br>    Date Rescued: <b>'+value.date_added+'</b><br>   Availability: <b>'+value.aniStatus+'</b> </p> </div> </div></div>';

                        $('#adopt').append(divContent);
                    });
                }
            });

        });
    </script>
</html>
