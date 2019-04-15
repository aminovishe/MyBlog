<!-- Button trigger modal -->
<small><a id="btnModalRegister" data-toggle="modal" data-target="#exampleModal">
        Click here
    </a></small>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register to be a member of our team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="color: white!important;" aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="lib/c_demandeRegister.php" method="post">
                <div class="modal-body">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="form-group w-45">
                            <input type="text" class="form-control" name="first_name" placeholder="First name"/>
                        </div>
                        <div class="form-group w-45">
                            <input type="text" class="form-control" name="last_name" placeholder="Last name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="reason" placeholder="Why do you want to join AmiBlog's team ?"></textarea>
                    </div>
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="terms" required> I agree to the <a style="color: #FFC107!important;" href="#">Terms
                                of Use</a> & <a style="color: #FFC107!important;" href="#">Privacy Policy</a>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>