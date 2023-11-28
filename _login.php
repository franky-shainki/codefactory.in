<?php
echo '<!-- Modal -->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Login to your account</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/codefactory.in/_login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="name" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-sm">login</button>
                    </div>
                    <hr>
                    <p class="text-center">or login through :<br> <br>
                    <a href="#"><img src="img/google_icon.png" class="mx-1" style="width:25px" alt="google"></a>
                    <a href="#"><img src="img/facebook_icon.png" class="mx-1" style="width:27px" alt="facebook"></a>
                    <a href="#"><img src="img/twitter_icon.png" class="mx-1" style="width:30px" alt="twitter"></a>
                    </p>
                    <hr>
                    <p class="text-center"><a href="#">Terms & Conditions</a> | <a href="#">Privacy policy</a></p>
                </form>
            </div>
          </div>
        </div>
      </div>';
      ?>
      