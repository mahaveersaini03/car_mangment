<?php include "header.php"; ?>
<?php include "conn.php"; ?>

<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<h1 class="app-page-title">Add Car Details</h1>
			<hr class="mb-4">
			<div class="row g-4 settings-section">

				<div class="col-12 col-md-12">
					<div class="app-card app-card-settings shadow-sm p-4">

						<div class="app-card-body">
							<form class="settings-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >

								<div class="row">

									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-1" class="form-label">Vechical Identity No.<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
													<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
													<circle cx="8" cy="4.5" r="1" />
												</svg></span></label>
										<input type="number" min="10000" max="19999" class="form-control" id="setting-input-1" value="Type VIN." name="VIN" placeholder="VIN" required>
									</div>
									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-2" class="form-label">Car Model Year</label>
										<input type="number" min="1900" name="YEAR" max="2099" step="1" class="form-control" id="setting-input-2" value="" placeholder="Car Model Year" required>
									</div>
									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Car make company</label>
										<input type="text" name="Make" class="form-control" id="setting-input-3" value="Manufacturer Company">
									</div>
								</div>

								<div class="row">
									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Car Model</label>
										<input type="text" name="Model" class="form-control" id="setting-input-3" value="Car Model">
									</div>

									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Trim</label>
										<input type="text" name="Trim" class="form-control" id="setting-input-3" value="Car Trim">
									</div>
									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">External Color</label>
										<input type="text" name="Ext_color" class="form-control" id="setting-input-3" value="Car External Color">
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Internal Color</label>
										<input type="text" name="Int_color" class="form-control" id="setting-input-3" value="Car Internal Color">
									</div>
									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Asking Price</label>
										<input type="number" name="Asking_price" class="form-control" id="setting-input-3" value="Asking Price of Car">
									</div>
									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Sale Price</label>
										<input type="number" name="Sale_prie" class="form-control" id="setting-input-3" value="Sale Price of Car">
									</div>
								</div>
								<div class="row">
									<div class="mb-3  col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Purchase Price</label>
										<input type="number" name="Purchase_price" class="form-control" id="setting-input-3" value="Purchase Price of Car">
									</div>
									<div class="mb-3  col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Mileage</label>
										<input type="number" name="Mileage" class="form-control" id="setting-input-3" value="Mileage of Car">
									</div>
									<div class="mb-3  col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Transmission</label>
										<input type="text" name="Transmission" class="form-control" id="setting-input-3" value="Transmission of Car">
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Purchase Date</label>
										<input type="date" name="Purhase_date" class="form-control" id="setting-input-3" value="Purchase Date">
									</div>

									<div class="mb-3 col-sm-6 col-md-4">
										<label for="setting-input-3" class="form-label">Sale Date</label>
										<input type="date" name="Sale_date" class="form-control" id="setting-input-3" value="Sale Date">
									</div>
								</div>
								<button type="submit" class="btn app-btn-primary" value="submit" name="submit">Save Changes</button>
							</form>
							<?php
							if (isset($_POST['submit'])) {

								$car_vin = $_POST['VIN'];
								$car_year = $_POST['YEAR'];
								$car_make = $_POST['Make'];
								$car_model = $_POST['Model'];
								$car_trim = $_POST['Trim'];
								$car_extcol = $_POST['Ext_color'];
								$car_intcol = $_POST['Int_color'];
								$car_askprice = $_POST['Asking_price'];
								$car_saleprice = $_POST['Sale_prie'];
								$car_purprice = $_POST['Purchase_price'];
								$car_mileage = $_POST['Mileage'];
								$car_transmission = $_POST['Transmission'];
								$car_purdate = $_POST['Purhase_date'];
								$car_Saledate = $_POST['Sale_date'];
								$sql = "INSERT INTO inventory (VIN, YEAR, Make, Model, Trim, Ext_color, Int_color, Asking_price, Sale_prie, Purchase_price, Mileage, Transmission, Purhase_date, Sale_date) VALUES ('{$car_vin}', '{$car_year}', '{$car_make}', '{$car_model}', '{$car_trim}', '{$car_extcol}', '{$car_intcol}', '{$car_askprice}', '{$car_saleprice}', '{$car_purprice}', '{$car_mileage}', '{$car_transmission}', '{$car_purdate}', '{$car_Saledate}'	)";
								$result = mysqli_query($conn, $sql) or die("Query Unsuccesfull");

								if ($result = $sql) {
									
								echo 	"<script> alert('You have succesfully entred the data'); </script>";
								} else {
								
								echo "	<script>alert('Erro entering data');</script>";
								}
							}

							//	header("Location: /car_mangment/");
							mysqli_close($conn);
							?>
						</div><!--//app-card-body-->

					</div><!--//app-card-->
				</div>
			</div><!--//row-->

		</div><!--//container-fluid-->
	</div><!--//app-content-->

	<footer class="app-footer">
		<div class="container text-center py-3">
			<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

		</div>
	</footer><!--//app-footer-->

</div>

<?php include "footer.php"; ?>