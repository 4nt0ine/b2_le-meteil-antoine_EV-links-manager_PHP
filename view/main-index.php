

<main>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="mb-3">
              <form action="" method="post">
                <div class="row g-2">
                  <div class="col-md">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        placeholder="Stack overflow"
                      />
                      <label for="title">Titre</label>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-floating">
                      <input
                        type="url"
                        class="form-control"
                        id="url"
                        name="url"
                        placeholder="https://stackoverflow.com"
                      />
                      <label for="url">Lien</label>
                    </div>
                  </div>
                  <div class="col-md-auto d-flex">
                    <button class="btn btn-primary btn-lg">Ajouter</button>
                  </div>
                </div>
              </form>
            </div>
            <ul class="list-group">
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <a href="https://developer.mozilla.org/fr"> MDN Web docs</a>
                <?php include("components/span.php");?>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <a href="https://css-tricks.com">CSS tricks</a>
                <?php include("components/span.php");?>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <a href="https://www.awwwards.com">AWWARDS</a>
                <?php include("components/span.php");?>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <a href="https://eilgin.github.io/php-the-right-way"
                  >PHP the right way</a
                >
                <?php include("components/span.php");?>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <a href="https://beta.reactjs.org">React.JS New doc</a>
                <?php include("components/span.php");?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </main>