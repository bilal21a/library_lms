    <script>
        function deleteData(id) {
            let singleDeleteDraw = {
                ...dataTable
            };
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.isConfirmed) {
                    url = delete_data_url.replace(':id', id);

                    axios.get(url)
                        .then(function(response) {
                            singleDeleteDraw._fnDraw();
                            Swal.fire(
                                'Deleted!',
                                'Your data has been Deleted.',
                                'success'
                            )
                        })
                        .catch(function(error) {});
                }
            })
        }
    </script>
