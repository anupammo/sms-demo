    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center my-4">Display Data</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-1 col-12"></div>
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="card border-dark rounded-0 my-5">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Age</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $db = db_connect();

                                    $query = $db->query('SELECT * FROM person;');

                                    foreach ($query->getResult() as $row) {
                                        echo "<tr>
                                    <th scope='row'>" . $row->serial_no . "</th>
                                    <td>" . $row->p_name . "</td>
                                    <td>" . $row->p_sex . "</td>
                                    <td>" . $row->cell_no . "</td>
                                    <td>" . $row->email_id . "</td>
                                    <td>" . $row->p_age . "</td>
                                </tr>";
                                    }

                                    $db->close();

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-1 col-12"></div>
            </div>
        </div>
    </section>