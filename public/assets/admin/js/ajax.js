$(document).ready(function() {
    /**
     * for showing edit item popup
     */

    $(document).on('click', "#edit-item", function() {
        //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
        $(this).addClass('edit-item-trigger-clicked');

        var options = {
            'backdrop': 'static'
        };
        $('#edit-modal').modal(options)
    })

    // on modal show
    $('#edit-modal').on('show.bs.modal', function() {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
        var row = el.closest(".data-row");

        // get the data
        var id = el.data("item-id");
        var name = row.children(".name").text();
        var statusText = row.children(".status").text().trim().toLowerCase();
        var status = "show" === statusText  ? 1 : 0;
        

        // let id = $(this).data('id');
        
        // get the data, fill the data in the input fields
        // $.get('category/' + id + '/edit', function(data, status) {
        //     $('#name').val(data.name);
        //     $('#status').val(data.status);
        // });

        // // fill the data in the input fields
        $("#modal-input-name").val(name);
        $("#modal-input-status").val(status);
        // $("#modal-input-description").val(description);

    })

    // on modal hide
    $('#edit-modal').on('hide.bs.modal', function() {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("#edit-form").trigger("reset");
    })
});

// $(document).ready(function() {
//     // $.ajaxSetup({
//     //     headers: {
//     //         "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")
//     //     }
//     // });
    
    



    // $('.edit').click(function() {
    //     let id = $(this).data('id');
        
    //     // show edit
    //     $.get('category/' + id + '/edit', function(data, status) {
    //         $('.name').val(data.name);
    //         $('.status').val(data.status);
    //     });

    //     // update category
    //     $('.update').click(function() {
    //         let name = $('.name').val();
    //         let status = $('.status').val();
    //         // $.post("category/" + id,
            
    //         //     // name : name,
    //         //     // status : status
    //         //     $('form').serialize()
    //         // ,
    //         // function(data, status) {
    //         //     console.log(data, status);
    //         // });
    //         $.ajax({
    //             type: "post",
    //             url: "category/" + id,
    //             data: $('form').serialize(),
    //             dataType: "dataType",
    //             success: function (response) {
    //                 console.log(response);
    //             }
    //         });
    //     });
    // });
// });