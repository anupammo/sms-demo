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

                        $query = $db->query('SELECT * FROM student;');

                        $row = $query->getRow();

                        if (isset($row)) {
                            echo "<ul class='list-group list-group-flush my-2'>
                            <li class='list-group-item'>
                                <span class='fw-bold'>Name : </span>
                                <span class='float-end'>" . $row->stud_name . "</span>
                            </li>
                            <li class='list-group-item'>
                                <span class='fw-bold'>Gender : </span>
                                <span class='float-end' id='stud_s'>" . $row->stud_sex . "</span>
                            </li>
                            <li class='list-group-item'>
                                <span class='fw-bold'>DOB : </span>
                                <span class='float-end'>" . $row->stud_dob . "</span>
                            </li>
                            <li class='list-group-item'>
                                <span class='fw-bold'>Mobile : </span>
                                <span class='float-end'>" . $row->stud_mob_p . "</span>
                            </li>
                            <li class='list-group-item'>
                                <span class='fw-bold'>Rank : </span>
                                <span class='float-end'>" . $row->stud_rank . "</span>
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