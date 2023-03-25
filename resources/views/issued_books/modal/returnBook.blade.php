<div class="modal modal-right large fade" id="returnModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="">Return Book</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body scroll-y mx-5">
                <div class="returnBookBlock">

                    <div class="mb-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="returnRadio" id="inlineRadio1" checked
                                value="issueid">
                            <label class="form-check-label" for="inlineRadio1">By issueID</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="returnRadio" id="inlineRadio2"
                                value="user_name">
                            <label class="form-check-label" for="inlineRadio2">By User Name</label>
                        </div>
                    </div>

                    <div id="issueid-section" class="mb-4">
                        <div class="d-flex flex-column justify-content-start">
                            <div class="text-muted mb-2">
                                <input type="text" name="name" class="form-control" placeholder="Search by Name">
                            </div>
                        </div>
                        <button class="btn btn-icon btn-icon-start btn-primary" type="submit">
                            <i data-acorn-icon="search"></i>
                            <span>Fetch</span>
                        </button>
                    </div>

                    <div id="user-name-section" style="display: none;" class="mb-4">
                        <div class="d-flex flex-column justify-content-start">
                            <div class="text-muted mb-2">
                                <select id="inputState" name="category" class="form-select">
                                    <option selected="selected" value="" disabled="">Search by User Name
                                    </option>

                                </select>
                            </div>
                        </div>
                        <button class="btn btn-icon btn-icon-start btn-primary" type="submit">
                            <i data-acorn-icon="search"></i>
                            <span>Fetch</span>
                        </button>
                    </div>


                    <div class="card mb-2  border-primary">
                        <a href="#" class="row g-0 sh-10">
                            <div class="col-auto">
                                <div class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="search"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                    <div class="d-flex flex-column">
                                        <div class="text-primary">Deffoldil book</div>
                                        <div class="text-small text-muted">issued date: 20 oct 2021</div>
                                        <div class="text-small text-muted">return date: 20 oct 2021</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
