function accAction(id) {
    // Perform AJAX request to insert data into another table
    $.ajax({
        type: 'POST',
        url: 'insert_into_other_table.php', // Replace with the actual PHP script
        data: {id: id},
        success: function(response) {
            // Handle the response if needed
            location.reload(true);
            console.log(response);
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}



    function deleteAction(id) {
        // Perform AJAX request to delete data from the table
        $.ajax({
            type: 'POST',
            url: 'delete_from_table.php', // Replace with the actual PHP script
            data: {id: id},
            success: function(response) {
                // Handle the response if needed
                location.reload(true);
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle errors if needed
                console.error(xhr.responseText);
            }
        });
    }
