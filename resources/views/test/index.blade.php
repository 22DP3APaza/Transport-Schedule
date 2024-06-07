<div class="container">
    <div class= 'row'>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Import Excel Data into database</h4>
                </div>
                <div class="card-body">
                    <form action="{{url('test/import')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group">
                            <input type="file" name="import_file" class='form-control' />
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
