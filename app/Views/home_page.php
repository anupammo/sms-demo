    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center my-4">Student Profile</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 px-0">
                    <div class="card bg-dark text-white rounded-0 border-0 px-0 my-5">
                        <div class="card-body">
                            <p class="text-center display-1 my-5">
                                <!-- <i class="bi bi-gender-male"></i> -->
                                <i class="bi bi-person-badge"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card border-dark rounded-0 my-5">
                        <?php

                        $db = db_connect();

                        $query = $db->query('SELECT * FROM person;');

                        $row = $query->getRow();

                        if (isset($row)) {
                            echo "<ul class='list-group list-group-flush my-2'>
                            <li class='list-group-item'>
                                <span class='fw-bold'>Name : </span>
                                <span class='float-end'>" . $row->p_name . "</span>
                            </li>
                            <li class='list-group-item'>
                                <span class='fw-bold'>Gender : </span>
                                <span class='float-end'>" . $row->p_sex . "</span>
                            </li>
                            <li class='list-group-item'>
                                <span class='fw-bold'>Age : </span>
                                <span class='float-end'>" . $row->p_age . "</span>
                            </li>
                            <li class='list-group-item'>
                                <span class='fw-bold'>Mobile : </span>
                                <span class='float-end'>" . $row->cell_no . "</span>
                            </li>
                            <li class='list-group-item'>
                                <span class='fw-bold'>Email : </span>
                                <span class='float-end'>" . $row->email_id . "</span>
                            </li>
                        </ul>";
                        }

                        $db->close();

                        ?>
                        <!-- <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span class="fw-bold">Name : </span>
                                <span class="float-end">Anupam Mondal</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Gender : </span>
                                <span class="float-end">Male</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Age : </span>
                                <span class="float-end">37</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Mobile : </span>
                                <span class="float-end">9474460058</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Email : </span>
                                <span class="float-end">a09051985@gmail.com</span>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>