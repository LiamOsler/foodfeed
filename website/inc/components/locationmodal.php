<!-- Login Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="locationModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginModalLabel">My Default Location</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <main>
                    <div class = "container">
                        <div class = "row">
                            <div class = "col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title"> <i class="bi bi-search"></i> Search</h3>
                                        <div class="autocomplete-container" id="autocomplete-container"></div>
                                        <div id="userMap"></div>
                                    </div>
                                </div>
                            </div>

                            <div class = "col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                    <h3 class="card-title"><i class="bi bi-geo-alt-fill"></i> Saved</h3>
                                            <form>
                                                <div class="form-group">
                                                <h4 class="card-title"><i class="bi bi-house"></i> Primary</h4>
                                                <label for="inputAddress">Street Address</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group">
                                                <label for="inputAddress2">Address 2</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">City</label>
                                                    <input type="text" class="form-control" id="inputCity">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState">Province</label>
                                                    <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputZip">Postal</label>
                                                    <input type="text" class="form-control" id="inputZip">
                                                </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
			</div>
		</div>
	</div>
</div>

