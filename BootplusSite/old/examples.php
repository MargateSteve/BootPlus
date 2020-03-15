<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css?v=2" rel="stylesheet" type="text/css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />

  <title></title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-1">
      <a class="navbar-brand" href="/PersonalProjects/bootstrap4/">BS4</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="#alerts">alerts</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#breadcrumb">breadcrumb</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#button-dropdown">button-dropdown</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#button-group">button-group</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#buttons">buttons</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#card">card</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#carousel">carousel</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#collapse">collapse</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#dropdowns">dropdowns</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#forms">forms</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#input-group">input-group</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#jumbotron">jumbotron</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#label">label</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#list-group">list-group</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#modal">modal</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#navbar">navbar</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#navs">navs</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#pagination">pagination</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#popovers">popovers</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#progress">progress</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#tooltips">tooltips</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#typography">typography</a>
              </li>
          </ul>


      </div>
    </nav>


  <div class="example-content container">

      <h1 class="example-title mt-2">Bootstrap full feature example</h1>

    <div class="all">
      <div class="sub-header">
        <h2 class="component-title" id="alerts">Alerts</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> You successfully read <a href="#" class=
            "alert-link">this important alert message</a>.
          </div>

          <div class="alert alert-info" role="alert">
            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs
            your attention</a>, but it's not super important.
          </div>
        </div>

        <div class="col-lg-6">
          <div class="alert alert-danger" role="alert">
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things
            up</a> and try submitting again.
          </div>

          <div class="alert alert-warning alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label=
            "Close"><span aria-hidden="true">&#215;</span></button> <strong>Holy
            guacamole!</strong> You should check in on some of those fields below.
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="breadcrumb">Breadcrumb</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <ol class="breadcrumb">
            <li class="active">Home</li>
          </ol>

          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>

            <li class="active">Library</li>
          </ol>

          <ol class="breadcrumb" style="margin-bottom: 5px;">
            <li><a href="#">Home</a></li>

            <li><a href="#">Library</a></li>

            <li class="active">Data</li>
          </ol>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="button-dropdown">Button-Dropdown</h2>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <h3 class="component-title">Single button dropdowns</h3>

          <div class="bd-example">
            <div class="btn-group">
              <button type="button" class="btn btn-secondary dropdown-toggle"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded=
              "false">Default</button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle=
              "dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-success dropdown-toggle" data-toggle=
              "dropdown" aria-haspopup="true" aria-expanded="false">Success</button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-info dropdown-toggle" data-toggle=
              "dropdown" aria-haspopup="true" aria-expanded="false">Info</button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle=
              "dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle=
              "dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <h3 class="component-title">Inline</h3>

          <div class="bd-example">
            <div class="btn-group">
              <button type="button" class="btn btn-secondary">Default</button>
              <button type="button" class="btn btn-secondary dropdown-toggle"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded=
              "false"><span class="sr-only">Toggle Dropdown</span></button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary">Primary</button>
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle=
              "dropdown" aria-haspopup="true" aria-expanded="false"><span class=
              "sr-only">Toggle Dropdown</span></button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-success">Success</button>
              <button type="button" class="btn btn-success dropdown-toggle" data-toggle=
              "dropdown" aria-haspopup="true" aria-expanded="false"><span class=
              "sr-only">Toggle Dropdown</span></button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-info">Info</button> <button type=
              "button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
              Dropdown</span></button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-warning">Warning</button>
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle=
              "dropdown" aria-haspopup="true" aria-expanded="false"><span class=
              "sr-only">Toggle Dropdown</span></button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-danger">Danger</button> <button type=
              "button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
              Dropdown</span></button>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <h3 class="component-title">Sizing</h3>

          <div class="bd-example">
            <div class="btn-toolbar" role="toolbar">
              <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Large
                button</button>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                  href="#">Another action</a> <a class="dropdown-item" href="#">Something
                  else here</a>

                  <div class="dropdown-divider"></div><a class="dropdown-item" href=
                  "#">Separated link</a>
                </div>
              </div>
            </div>

            <div class="btn-toolbar" role="toolbar">
              <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Small
                button</button>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                  href="#">Another action</a> <a class="dropdown-item" href="#">Something
                  else here</a>

                  <div class="dropdown-divider"></div><a class="dropdown-item" href=
                  "#">Separated link</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <h3 class="component-title">Dropup variation</h3>

          <div class="bd-example">
            <div class="btn-toolbar" role="toolbar">
              <div class="btn-group dropup">
                <button type="button" class="btn btn-secondary">Dropup</button>
                <button type="button" class="btn btn-secondary dropdown-toggle"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded=
                "false"><span class="sr-only">Toggle Dropdown</span></button>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                  href="#">Another action</a> <a class="dropdown-item" href="#">Something
                  else here</a>

                  <div class="dropdown-divider"></div><a class="dropdown-item" href=
                  "#">Separated link</a>
                </div>
              </div>

              <div class="btn-group dropup">
                <button type="button" class="btn btn-primary">Right dropup</button>
                <button type="button" class="btn btn-primary dropdown-toggle"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded=
                "false"><span class="sr-only">Toggle Dropdown</span></button>

                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                  href="#">Another action</a> <a class="dropdown-item" href="#">Something
                  else here</a>

                  <div class="dropdown-divider"></div><a class="dropdown-item" href=
                  "#">Separated link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="button-group">Button group</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Basic example</h3>

          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Left</button> <button type=
            "button" class="btn btn-secondary">Middle</button> <button type="button"
            class="btn btn-secondary">Right</button>
          </div>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Button toolbar</h3>

          <div class="btn-toolbar" role="toolbar" aria-label=
          "Toolbar with button groups">
            <div class="btn-group" role="group" aria-label="First group">
              <button type="button" class="btn btn-secondary">1</button> <button type=
              "button" class="btn btn-secondary">2</button> <button type="button" class=
              "btn btn-secondary">3</button> <button type="button" class=
              "btn btn-secondary">4</button>
            </div>

            <div class="btn-group" role="group" aria-label="Second group">
              <button type="button" class="btn btn-secondary">5</button> <button type=
              "button" class="btn btn-secondary">6</button> <button type="button" class=
              "btn btn-secondary">7</button>
            </div>

            <div class="btn-group" role="group" aria-label="Third group">
              <button type="button" class="btn btn-secondary">8</button>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Sizing</h3>

          <div class="bd-example">
            <div class="btn-group btn-group-lg" role="group" aria-label=
            "Large button group">
              <button type="button" class="btn btn-secondary">Left</button> <button type=
              "button" class="btn btn-secondary">Middle</button> <button type="button"
              class="btn btn-secondary">Right</button>
            </div><br />

            <div class="btn-group" role="group" aria-label="Default button group">
              <button type="button" class="btn btn-secondary">Left</button> <button type=
              "button" class="btn btn-secondary">Middle</button> <button type="button"
              class="btn btn-secondary">Right</button>
            </div><br />

            <div class="btn-group btn-group-sm" role="group" aria-label=
            "Small button group">
              <button type="button" class="btn btn-secondary">Left</button> <button type=
              "button" class="btn btn-secondary">Middle</button> <button type="button"
              class="btn btn-secondary">Right</button>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Vertical variation</h3>

          <div class="bd-example">
            <div class="btn-group-vertical" role="group" aria-label=
            "Vertical button group">
              <button type="button" class="btn btn-secondary">Button</button>
              <button type="button" class="btn btn-secondary">Button</button>

              <div class="btn-group" role="group">
                <button id="btnGroupVerticalDrop1" type="button" class=
                "btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup=
                "true" aria-expanded="false">Dropdown</button>

                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                  <a class="dropdown-item" href="#">Dropdown link</a> <a class=
                  "dropdown-item" href="#">Dropdown link</a>
                </div>
              </div><button type="button" class="btn btn-secondary">Button</button>
              <button type="button" class="btn btn-secondary">Button</button>

              <div class="btn-group" role="group">
                <button id="btnGroupVerticalDrop2" type="button" class=
                "btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup=
                "true" aria-expanded="false">Dropdown</button>

                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                  <a class="dropdown-item" href="#">Dropdown link</a> <a class=
                  "dropdown-item" href="#">Dropdown link</a>
                </div>
              </div>

              <div class="btn-group" role="group">
                <button id="btnGroupVerticalDrop3" type="button" class=
                "btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup=
                "true" aria-expanded="false">Dropdown</button>

                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                  <a class="dropdown-item" href="#">Dropdown link</a> <a class=
                  "dropdown-item" href="#">Dropdown link</a>
                </div>
              </div>

              <div class="btn-group" role="group">
                <button id="btnGroupVerticalDrop4" type="button" class=
                "btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup=
                "true" aria-expanded="false">Dropdown</button>

                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                  <a class="dropdown-item" href="#">Dropdown link</a> <a class=
                  "dropdown-item" href="#">Dropdown link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="buttons">Buttons</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Examples</h3><button type="button" class=
          "btn btn-primary">Primary</button><button type="button" class=
          "btn btn-secondary">Secondary</button><button type="button" class=
          "btn btn-success">Success</button><button type="button" class=
          "btn btn-info">Info</button><button type="button" class=
          "btn btn-warning">Warning</button><button type="button" class=
          "btn btn-danger">Danger</button><button type="button" class=
          "btn btn-link">Link</button>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Button tags</h3><a class="btn btn-primary" href="#"
          role="button">Link</a> <button class="btn btn-primary" type=
          "submit">Button</button> <input class="btn btn-primary" type="button" value=
          "Input" /><input class="btn btn-primary" type="submit" value="Submit" />

          <h3 class="component-title">Outline buttons</h3><button type="button" class=
          "btn btn-outline-primary">Primary</button> <button type="button" class=
          "btn btn-outline-secondary">Secondary</button> <button type="button" class=
          "btn btn-outline-success">Success</button> <button type="button" class=
          "btn btn-outline-info">Info</button> <button type="button" class=
          "btn btn-outline-warning">Warning</button> <button type="button" class=
          "btn btn-outline-danger">Danger</button>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Sizes</h3><button type="button" class=
          "btn btn-primary btn-lg">Large button</button> <button type="button" class=
          "btn btn-secondary btn-lg">Large button</button> <button type="button" class=
          "btn btn-primary btn-sm">Small button</button> <button type="button" class=
          "btn btn-secondary btn-sm">Small button</button> <button type="button" class=
          "btn btn-primary btn-lg btn-block">Block level button</button> <button type=
          "button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Active state</h3><a href="#" class=
          "btn btn-primary btn-lg active" role="button">Primary link</a> <a href="#"
          class="btn btn-secondary btn-lg active" role="button">Link</a>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Disabled state</h3><button type="button" class=
          "btn btn-lg btn-primary" disabled="disabled">Primary button</button>
          <button type="button" class="btn btn-secondary btn-lg" disabled=
          "disabled">Button</button> <a href="#" class="btn btn-primary btn-lg disabled"
          role="button">Primary link</a> <a href="#" class=
          "btn btn-secondary btn-lg disabled" role="button">Link</a>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Toggle states</h3><button type="button" class=
          "btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete=
          "off">Single toggle</button>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Checkbox and radio buttons</h3>

          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary active"><input type="checkbox" checked=
            "checked" autocomplete="off" /> Checkbox 1 (pre-checked)</label>
            <label class="btn btn-primary"><input type="checkbox" autocomplete="off" />
            Checkbox 2</label> <label class="btn btn-primary"><input type="checkbox"
            autocomplete="off" /> Checkbox 3</label>

            <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-primary active"><input type="radio" name="options"
              id="option1" autocomplete="off" checked="checked" /> Radio 1
              (preselected)</label> <label class="btn btn-primary"><input type="radio"
              name="options" id="option2" autocomplete="off" /> Radio 2</label>
              <label class="btn btn-primary"><input type="radio" name="options" id=
              "option3" autocomplete="off" /> Radio 3</label>
            </div>
          </div>
        </div>

        <div class="col-lg-6"></div>
      </div>

      <div class="row">
        <div class="col-lg-6"></div>

        <div class="col-lg-6"></div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="cards">Cards</h2>
      </div>

      <h3 class="component-title">Example</h3>

      <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <img class="card-img-top" data-src="holder.js/100px180/" alt=
            "Card image cap" />

            <div class="card-block">
              <h4 class="card-title">Basic example</h4>

              <p class="card-text">Some quick example text to build on the card title and
              make up the bulk of the card's content.</p><a href="#" class=
              "btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt=
            "Card image cap" />

            <div class="card-block">
              <h4 class="card-title">Content types</h4>

              <p class="card-text">Some quick example text to build on the card title and
              make up the bulk of the card's content.</p>
            </div>

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>

              <li class="list-group-item">Dapibus ac facilisis in</li>

              <li class="list-group-item">Vestibulum at eros</li>
            </ul>

            <div class="card-block">
              <a href="#" class="card-link">Card link</a> <a href="#" class=
              "card-link">Another link</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">a list-group</li>

              <li class="list-group-item">example with use of</li>

              <li class="list-group-item">ul/li, li=list-group-item</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt=
            "Card image cap" />

            <div class="card-block">
              <p class="card-text">Some quick example text to build on the card title and
              make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>

      <h3 class="component-title">Sizing</h3>

      <div class="row">
        <div class="col-lg-8">
          <div class="col-sm-6">
            <div class="card card-block">
              <h3 class="card-title">Inside col-sm-6</h3>

              <p class="card-text">With supporting text below as a natural lead-in to
              additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="card card-block">
              <h3 class="card-title">Inside col-sm-6</h3>

              <p class="card-text">With supporting text below as a natural lead-in to
              additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-block" style="width: 18rem;">
            <h3 class="card-title">Fixed-width also supported</h3>

            <p class="card-text">With supporting text below as a natural lead-in to
            additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <h3 class="component-title">Text alignment</h3>

      <div class="col-lg-4">
        <div class="card card-block">
          <h4 class="card-title">Left-alignment</h4>

          <p class="card-text">With supporting text below as a natural lead-in to
          additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card card-block text-xs-center">
          <h4 class="card-title">Real centering</h4>

          <p class="card-text">With supporting text below as a natural lead-in to
          additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card card-block text-xs-right">
          <h4 class="card-title">Right-alignment</h4>

          <p class="card-text">With supporting text below as a natural lead-in to
          additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <h3 class="component-title">Header and footer</h3>

      <div class="col-lg-3">
        <div class="card">
          <div class="card-header">
            Featured
          </div>

          <div class="card-block">
            <h4 class="card-title">Special title treatment</h4>

            <p class="card-text">With supporting text below as a natural lead-in to
            additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card">
          <h3 class="card-header">Featured</h3>

          <div class="card-block">
            <h4 class="card-title">Special title treatment</h4>

            <p class="card-text">With supporting text below as a natural lead-in to
            additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card">
          <div class="card-header">
            Quote
          </div>

          <div class="card-block">
            <blockquote class="card-blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
              erat a ante.</p>Someone famous in <cite title="Source Title">Source
              Title</cite>
            </blockquote>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card text-xs-center">
          <div class="card-header">
            Featured
          </div>

          <div class="card-block">
            <h4 class="card-title">Special title treatment</h4>

            <p class="card-text">With supporting text below as a natural lead-in to
            additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a>
          </div>

          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <img class="card-img-top" data-src="holder.js/100px180/" alt=
            "Card image cap" />

            <div class="card-block">
              <h4 class="card-title">Img Caps</h4>

              <p class="card-text">This is a wider card with supporting text below as a
              natural lead-in to additional content. This content is a little bit
              longer.</p>

              <p class="card-text"><small class="text-muted">Last updated 3 mins
              ago</small></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
          <div class="card-block">
            <h4 class="card-title">Img caps</h4>

            <p class="card-text">This is a wider card with supporting text below as a
            natural lead-in to additional content. This content is a little bit
            longer.</p>

            <p class="card-text"><small class="text-muted">Last updated 3 mins
            ago</small></p>
          </div><img class="card-img-bottom" data-src="holder.js/100px180/" alt=
          "Card image cap" /></div>
        </div>

        <div class="col-lg-3">
          <div class="card card-inverse">
            <img class="card-img" data-src=
            "holder.js/100px270/#55595c:#373a3c/text:Card image" alt="Card image" />

            <div class="card-img-overlay">
              <h4 class="card-title">Image overlay</h4>

              <p class="card-text">This is a wider card with supporting text below as a
              natural lead-in to additional content. This content is a little bit
              longer.</p>

              <p class="card-text"><small class="text-muted">Last updated 3 mins
              ago</small></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card card-inverse" style=
          "background-color: #333; border-color: #333;">
            <div class="card-block">
              <h3 class="card-title">Inverted color</h3>

              <p class="card-text">With supporting text below as a natural lead-in to
              additional content.</p><a href="#" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

      <h3 class="component-title">Background variants</h3>

      <div class="row">
        <div class="col-lg-4">
          <div class="card card-inverse card-primary text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                posuere erat a ante.</p>Someone famous in <cite title=
                "Source Title">Source Title</cite>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-inverse card-success text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                posuere erat a ante.</p>Someone famous in <cite title=
                "Source Title">Source Title</cite>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-inverse card-info text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                posuere erat a ante.</p>Someone famous in <cite title=
                "Source Title">Source Title</cite>
              </blockquote>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="card card-inverse card-warning text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                posuere erat a ante.</p>Someone famous in <cite title=
                "Source Title">Source Title</cite>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-inverse card-danger text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                posuere erat a ante.</p>Someone famous in <cite title=
                "Source Title">Source Title</cite>
              </blockquote>
            </div>
          </div>
        </div>
      </div>

      <h3 class="component-title">Groups</h3>

      <div class="card-group">
        <div class="card">
          <img class="card-img-top" data-src="holder.js/100px180/" alt=
          "Card image cap" />

          <div class="card-block">
            <h4 class="card-title">Card title</h4>

            <p class="card-text">This is a wider card with supporting text below as a
            natural lead-in to additional content. This content is a little bit
            longer.</p>

            <p class="card-text"><small class="text-muted">Last updated 3 mins
            ago</small></p>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" data-src="holder.js/100px180/" alt=
          "Card image cap" />

          <div class="card-block">
            <h4 class="card-title">Card title</h4>

            <p class="card-text">This card has supporting text below as a natural lead-in
            to additional content.</p>

            <p class="card-text"><small class="text-muted">Last updated 3 mins
            ago</small></p>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" data-src="holder.js/100px180/" alt=
          "Card image cap" />

          <div class="card-block">
            <h4 class="card-title">Card title</h4>

            <p class="card-text">This is a wider card with supporting text below as a
            natural lead-in to additional content. This card has even longer content than
            the first to show that equal height action.</p>

            <p class="card-text"><small class="text-muted">Last updated 3 mins
            ago</small></p>
          </div>
        </div>
      </div>

      <h3 class="component-title">Decks</h3>

      <div class="card-deck-wrapper">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" data-src="holder.js/100px200/" alt=
            "Card image cap" />

            <div class="card-block">
              <h4 class="card-title">Card title</h4>

              <p class="card-text">This is a longer card with supporting text below as a
              natural lead-in to additional content. This content is a little bit
              longer.</p>

              <p class="card-text"><small class="text-muted">Last updated 3 mins
              ago</small></p>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" data-src="holder.js/100px200/" alt=
            "Card image cap" />

            <div class="card-block">
              <h4 class="card-title">Card title</h4>

              <p class="card-text">This card has supporting text below as a natural
              lead-in to additional content.</p>

              <p class="card-text"><small class="text-muted">Last updated 3 mins
              ago</small></p>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" data-src="holder.js/100px200/" alt=
            "Card image cap" />

            <div class="card-block">
              <h4 class="card-title">Card title</h4>

              <p class="card-text">This is a wider card with supporting text below as a
              natural lead-in to additional content. This card has even longer content
              than the first to show that equal height action.</p>

              <p class="card-text"><small class="text-muted">Last updated 3 mins
              ago</small></p>
            </div>
          </div>
        </div>
      </div>

      <h3 class="component-title">Columns</h3>

      <div class="card-columns">
        <div class="card">
          <img class="card-img-top" data-src="holder.js/100px160/" alt=
          "Card image cap" />

          <div class="card-block">
            <h4 class="card-title">Card title that wraps to a new line</h4>

            <p class="card-text">This is a longer card with supporting text below as a
            natural lead-in to additional content. This content is a little bit
            longer.</p>
          </div>
        </div>

        <div class="card card-block">
          <blockquote class="card-blockquote">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
            erat a ante.</p><small class="text-muted">Someone famous in <cite title=
            "Source Title">Source Title</cite></small>
          </blockquote>
        </div>

        <div class="card">
          <img class="card-img-top" data-src="holder.js/100px160/" alt=
          "Card image cap" />

          <div class="card-block">
            <h4 class="card-title">Card title</h4>

            <p class="card-text">This card has supporting text below as a natural lead-in
            to additional content.</p>

            <p class="card-text"><small class="text-muted">Last updated 3 mins
            ago</small></p>
          </div>
        </div>

        <div class="card card-block card-inverse card-primary text-xs-center">
          <blockquote class="card-blockquote">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
            erat.</p><small>Someone famous in <cite title="Source Title">Source
            Title</cite></small>
          </blockquote>
        </div>

        <div class="card card-block text-xs-center">
          <h4 class="card-title">Card title</h4>

          <p class="card-text">This card has supporting text below as a natural lead-in
          to additional content.</p>

          <p class="card-text"><small class="text-muted">Last updated 3 mins
          ago</small></p>
        </div>

        <div class="card"><img class="card-img" data-src="holder.js/100px260/" alt=
        "Card image" /></div>

        <div class="card card-block text-xs-right">
          <blockquote class="card-blockquote">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
            erat a ante.</p><small class="text-muted">Someone famous in <cite title=
            "Source Title">Source Title</cite></small>
          </blockquote>
        </div>

        <div class="card card-block">
          <h4 class="card-title">Card title</h4>

          <p class="card-text">This is a wider card with supporting text below as a
          natural lead-in to additional content. This card has even longer content than
          the first to show that equal height action.</p>

          <p class="card-text"><small class="text-muted">Last updated 3 mins
          ago</small></p>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="carousel">Carousel</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active"><img data-src=
              "holder.js/450x250/auto/#777:#555/text:First slide" alt=
              "First slide" /></div>

              <div class="carousel-item"><img data-src=
              "holder.js/450x250/auto/#666:#444/text:Second slide" alt=
              "Second slide" /></div>

              <div class="carousel-item"><img data-src=
              "holder.js/450x250/auto/#555:#333/text:Third slide" alt=
              "Third slide" /></div>
            </div><a class="left carousel-control" href="#carousel-example-generic" role=
            "button" data-slide="prev"> <span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#carousel-example-generic" role=
            "button" data-slide="next"> <span class="sr-only">Next</span></a>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="bd-example">
            <div id="carousel-example-captions" class="carousel slide" data-ride=
            "carousel">
              <ol class="carousel-indicators"></ol>

              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img data-src="holder.js/450x250/auto/#777:#777" alt=
                  "First slide image" />

                  <div class="carousel-caption">
                    <h3>First slide label</h3>

                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>

                <div class="carousel-item">
                  <img data-src="holder.js/450x250/auto/#666:#666" alt=
                  "Second slide image" />

                  <div class="carousel-caption">
                    <h3>Second slide label</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>

                <div class="carousel-item">
                  <img data-src="holder.js/450x250/auto/#555:#555" alt=
                  "Third slide image" />

                  <div class="carousel-caption">
                    <h3>Third slide label</h3>

                    <p>Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur.</p>
                  </div>
                </div>
              </div><a class="left carousel-control" href="#carousel-example-captions"
              role="button" data-slide="prev"> <span class="sr-only">Previous</span></a>
              <a class="right carousel-control" href="#carousel-example-captions" role=
              "button" data-slide="next"> <span class="sr-only">Next</span></a>
            </div>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="collapse">Collapse</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample"
          aria-expanded="false" aria-controls="collapseExample">Link with href</a>
          <button class="btn btn-primary" type="button" data-toggle="collapse"
          data-target="#collapseExample" aria-expanded="false" aria-controls=
          "collapseExample">Button with data-target</button></p>

          <div class="collapse" id="collapseExample">
            <div class="card card-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
              richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
              anderson cred nesciunt sapiente ea proident.
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title"><a data-toggle="collapse" data-parent=
                "#accordion" href="#collapseOne" aria-expanded="true" aria-controls=
                "collapseOne">Collapsible Group Item #1</a></h4>
              </div>

              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
              aria-labelledby="headingOne">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title"><a class="collapsed" data-toggle="collapse"
                data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                aria-controls="collapseTwo">Collapsible Group Item #2</a></h4>
              </div>

              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
              aria-labelledby="headingTwo">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title"><a class="collapsed" data-toggle="collapse"
                data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                aria-controls="collapseThree">Collapsible Group Item #3</a></h4>
              </div>

              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
              aria-labelledby="headingThree">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="dropdowns">Dropdowns</h2>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="component-title">Example</h3>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id=
            "dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded=
            "false">Dropdown</button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href=
              "#">Another action</a> <a class="dropdown-item" href="#">Something else
              here</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Button elements</h3>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id=
            "dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded=
            "false">Dropdown</button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">Action</button> <button class=
              "dropdown-item" type="button">Another action</button> <button class=
              "dropdown-item" type="button">Something else here</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Menu headers</h3>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id=
            "dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded=
            "false">Dropdown</button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <h6 class="dropdown-header">Dropdown header</h6><button class=
              "dropdown-item" type="button">Action</button> <button class="dropdown-item"
              type="button">Another action</button> <button class="dropdown-item" type=
              "button">Something else here</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="component-title">Menu dividers</h3>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id=
            "dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded=
            "false">Dropdown</button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">Action</button> <button class=
              "dropdown-item" type="button">Another action</button>

              <div class="dropdown-divider"></div><button class="dropdown-item" type=
              "button">Something else here</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Disabled menu items</h3>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id=
            "dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded=
            "false">Dropdown</button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">Action</button> <button class=
              "dropdown-item" type="button">Another action</button> <a class=
              "dropdown-item disabled" href="#">Disabled link</a> <button class=
              "dropdown-item" type="button">Something else here</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4"></div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="forms">Forms</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Form controls</h3>

          <form>
            <fieldset class="form-group">
              <label for="exampleInputEmail1">Email address</label> <input type="email"
              class="form-control" id="exampleInputEmail1" placeholder=
              "Enter email" /><small class="text-muted">We'll never share your email with
              anyone else.</small>
            </fieldset>

            <fieldset class="form-group">
              <label for="exampleInputPassword1">Password</label> <input type="password"
              class="form-control" id="exampleInputPassword1" placeholder="Password" />
            </fieldset>

            <fieldset class="form-group">
              <label for="exampleSelect1">Example select</label><select class=
              "form-control" id="exampleSelect1">
                <option>
                  1
                </option>

                <option>
                  2
                </option>

                <option>
                  3
                </option>

                <option>
                  4
                </option>

                <option>
                  5
                </option>
              </select>
            </fieldset>

            <fieldset class="form-group">
              <label for="exampleSelect2">Example multiple
              select</label><select multiple="multiple" class="form-control" id=
              "exampleSelect2">
                <option>
                  1
                </option>

                <option>
                  2
                </option>

                <option>
                  3
                </option>

                <option>
                  4
                </option>

                <option>
                  5
                </option>
              </select>
            </fieldset>

            <fieldset class="form-group">
              <label for="exampleTextarea">Example textarea</label>
              <textarea class="form-control" id="exampleTextarea" rows="3">
</textarea>
            </fieldset>

            <fieldset class="form-group">
              <label for="exampleInputFile">File input</label> <input type="file" class=
              "form-control-file" id="exampleInputFile" /><small class="text-muted">This
              is some placeholder block-level help text for the above input. It's a bit
              lighter and easily wraps to a new line.</small>
            </fieldset>

            <div class="radio">
              <label><input type="radio" name="optionsRadios" id="optionsRadios1" value=
              "option1" checked="checked" /> Option one is this and that&#8212;be sure to
              include why it's great</label>
            </div>

            <div class="radio">
              <label><input type="radio" name="optionsRadios" id="optionsRadios2" value=
              "option2" /> Option two can be something else and selecting it will
              deselect option one</label>
            </div>

            <div class="radio disabled">
              <label><input type="radio" name="optionsRadios" id="optionsRadios3" value=
              "option3" disabled="disabled" /> Option three is disabled</label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" /> Check me out</label>
            </div><button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Form groups</h3>

          <form>
            <fieldset class="form-group">
              <label for="formGroupExampleInput">Example label</label> <input type="text"
              class="form-control" id="formGroupExampleInput" placeholder=
              "Example input" />
            </fieldset>

            <fieldset class="form-group">
              <label for="formGroupExampleInput2">Another label</label> <input type=
              "text" class="form-control" id="formGroupExampleInput2" placeholder=
              "Another input" />
            </fieldset>
          </form>

          <h3 class="component-title">Inline forms</h3>

          <h4 class="component-title">Visible labels</h4>

          <form class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Name</label> <input type="text" class=
              "form-control" id="exampleInputName2" placeholder="Jane Doe" />
            </div>

            <div class="form-group">
              <label for="exampleInputEmail2">Email</label> <input type="email" class=
              "form-control" id="exampleInputEmail2" placeholder=
              "jane.doe@example.com" />
            </div><button type="submit" class="btn btn-primary">Send invitation</button>
          </form>

          <h4 class="component-title">Hidden labels</h4>

          <form class="form-inline">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail3">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail3"
              placeholder="Enter email" />
            </div>

            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword3">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword3"
              placeholder="Password" />
            </div>

            <div class="checkbox">
              <label><input type="checkbox" /> Remember me</label>
            </div><button type="submit" class="btn btn-primary">Sign in</button>
          </form>

          <form class="form-inline">
            <div class="form-group">
              <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>

              <div class="input-group">
                <div class="input-group-addon">
                  $
                </div><input type="text" class="form-control" id="exampleInputAmount"
                placeholder="Amount" />

                <div class="input-group-addon">
                  .00
                </div>
              </div>
            </div><button type="submit" class="btn btn-primary">Transfer cash</button>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Using the Grid</h3>

          <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>

              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder=
                "Email" />
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class=
              "col-sm-2 form-control-label">Password</label>

              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3"
                placeholder="Password" />
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2">Radios</label>

              <div class="col-sm-10">
                <div class="radio">
                  <label><input type="radio" name="gridRadios" id="gridRadios1" value=
                  "option1" checked="checked" /> Option one is this and that&#8212;be
                  sure to include why it's great</label>
                </div>

                <div class="radio">
                  <label><input type="radio" name="gridRadios" id="gridRadios2" value=
                  "option2" /> Option two can be something else and selecting it will
                  deselect option one</label>
                </div>

                <div class="radio disabled">
                  <label><input type="radio" name="gridRadios" id="gridRadios3" value=
                  "option3" disabled="disabled" /> Option three is disabled</label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2">Checkbox</label>

              <div class="col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox" /> Check me out</label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-secondary">Sign in</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Checkboxes and radios</h3>

          <h4 class="component-title">Default (stacked)</h4>

          <div class="checkbox">
            <label><input type="checkbox" /> Option one is this and that&#8212;be sure to
            include why it's great</label>
          </div>

          <div class="checkbox disabled">
            <label><input type="checkbox" disabled="disabled" /> Option two is
            disabled</label>
          </div>

          <div class="radio">
            <label><input type="radio" name="exampleRadios" id="exampleRadios1" value=
            "option1" checked="checked" /> Option one is this and that&#8212;be sure to
            include why it's great</label>
          </div>

          <div class="radio">
            <label><input type="radio" name="exampleRadios" id="exampleRadios2" value=
            "option2" /> Option two can be something else and selecting it will deselect
            option one</label>
          </div>

          <div class="radio disabled">
            <label><input type="radio" name="exampleRadios" id="exampleRadios3" value=
            "option3" disabled="disabled" /> Option three is disabled</label>
          </div>
        </div>

        <h4 class="component-title">Inline</h4><label class=
        "checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1" />
        1</label> <label class="checkbox-inline"><input type="checkbox" id=
        "inlineCheckbox2" value="option2" /> 2</label> <label class=
        "checkbox-inline"><input type="checkbox" id="inlineCheckbox3" value="option3" />
        3</label> <label class="radio-inline"><input type="radio" name=
        "inlineRadioOptions" id="inlineRadio1" value="option1" /> 1</label> <label class=
        "radio-inline"><input type="radio" name="inlineRadioOptions" id="inlineRadio2"
        value="option2" /> 2</label> <label class="radio-inline"><input type="radio"
        name="inlineRadioOptions" id="inlineRadio3" value="option3" /> 3</label>

        <h4 class="component-title">Without labels</h4><span class=
        "checkbox"><label><input type="checkbox" id="blankCheckbox" value=
        "option1" /></label></span> <span class="radio"><label><input type="radio" name=
        "blankRadio" id="blankRadio1" value="option1" /></label></span>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Static controls</h3>

          <form>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label">Email</label>

              <div class="col-sm-10">
                <p class="form-control-static">email@example.com</p>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword" class=
              "col-sm-2 form-control-label">Password</label>

              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword"
                placeholder="Password" />
              </div>
            </div>
          </form>

          <form class="form-inline">
            <div class="form-group">
              <label class="sr-only">Email</label>

              <p class="form-control-static">email@example.com</p>
            </div>

            <div class="form-group">
              <label for="inputPassword2" class="sr-only">Password</label> <input type=
              "password" class="form-control" id="inputPassword2" placeholder=
              "Password" />
            </div><button type="submit" class="btn btn-primary">Confirm identity</button>
          </form>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Disabled states</h3>

          <form>
            <fieldset disabled="disabled">
              <div class="form-group">
                <label for="disabledTextInput">Disabled input</label> <input type="text"
                id="disabledTextInput" class="form-control" placeholder=
                "Disabled input" />
              </div>

              <div class="form-group">
                <label for="disabledSelect">Disabled select menu</label><select id=
                "disabledSelect" class="form-control">
                  <option>
                    Disabled select
                  </option>
                </select>
              </div>

              <div class="checkbox">
                <label><input type="checkbox" /> Can't check this</label>
              </div><button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Control sizing</h3><input class=
          "form-control form-control-lg" type="text" placeholder=
          ".form-control-lg" /><input class="form-control" type="text" placeholder=
          "Default input" /><input class="form-control form-control-sm" type="text"
          placeholder=".form-control-sm" />
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Readonly inputs</h3><input class="form-control"
          type="text" placeholder="Readonly input here&#8230;" readonly="readonly" />

          <h3 class="component-title">Column sizing</h3>Wrap inputs in grid columns, or
          any custom parent element, to easily enforce desired widths.

          <div class="row">
            <div class="col-xs-2">
              <input type="text" class="form-control" placeholder=".col-xs-2" />
            </div>

            <div class="col-xs-3">
              <input type="text" class="form-control" placeholder=".col-xs-3" />
            </div>

            <div class="col-xs-4">
              <input type="text" class="form-control" placeholder=".col-xs-4" />
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Validation</h3>

          <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Input with
            success</label> <input type="text" class="form-control form-control-success"
            id="inputSuccess1" />
          </div>

          <div class="form-group has-warning">
            <label class="form-control-label" for="inputWarning1">Input with
            warning</label> <input type="text" class="form-control form-control-warning"
            id="inputWarning1" />
          </div>

          <div class="form-group has-danger">
            <label class="form-control-label" for="inputDanger1">Input with
            danger</label> <input type="text" class="form-control form-control-danger"
            id="inputDanger1" />
          </div>

          <div class="checkbox has-success">
            <label><input type="checkbox" id="checkboxSuccess" value="option1" />
            Checkbox with success</label>
          </div>

          <div class="checkbox has-warning">
            <label><input type="checkbox" id="checkboxWarning" value="option1" />
            Checkbox with warning</label>
          </div>

          <div class="checkbox has-danger">
            <label><input type="checkbox" id="checkboxDanger" value="option1" /> Checkbox
            with danger</label>
          </div>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Custom forms</h3>

          <h4 class="component-title">Checkboxes</h4><label class=
          "c-input c-checkbox"><input type="checkbox" /> Check this custom
          checkbox</label>

          <div class="bd-example bd-example-indeterminate">
            <label class="c-input c-checkbox"><input type="checkbox" /> Check this custom
            checkbox</label>
          </div>

          <h4 class="component-title">Radios</h4><label class=
          "c-input c-radio"><input id="radio1" name="radio" type="radio" /> Toggle this
          custom radio</label> <label class="c-input c-radio"><input id="radio2" name=
          "radio" type="radio" /> Or toggle this other custom radio</label>

          <h4 class="component-title">Stacked</h4>

          <div class="c-inputs-stacked">
            <label class="c-input c-radio"><input id="radioStacked1" name="radio-stacked"
            type="radio" /> Toggle this custom radio</label> <label class=
            "c-input c-radio"><input id="radioStacked2" name="radio-stacked" type=
            "radio" /> Or toggle this other custom radio</label>
          </div>

          <h4 class="component-title">Select menu</h4><select class="c-select">
            <option selected="selected">
              Open this select menu
            </option>

            <option value="1">
              One
            </option>

            <option value="2">
              Two
            </option>

            <option value="3">
              Three
            </option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">File browser</h3><label class="file"><input type=
          "file" id="file" /> </label>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Help text</h3><small class="text-muted">Some inline
          text with a small tag looks like this.</small>

          <p class="text-muted">A block of help text that breaks onto a new line and may
          extend beyond one line.</p>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="input-group">Input-group</h2>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="component-title">Basic example</h3>

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span> <input type="text"
            class="form-control" placeholder="Username" aria-describedby=
            "basic-addon1" />
          </div><br />

          <div class="input-group">
            <input type="text" class="form-control" placeholder="Recipient's username"
            aria-describedby="basic-addon2" /><span class="input-group-addon" id=
            "basic-addon2">@example.com</span>
          </div><br />
          <label for="basic-url">Your vanity URL</label>

          <div class="input-group">
            <span class="input-group-addon" id=
            "basic-addon3">https://example.com/users/</span> <input type="text" class=
            "form-control" id="basic-url" aria-describedby="basic-addon3" />
          </div><br />

          <div class="input-group">
            <span class="input-group-addon">$</span> <input type="text" class=
            "form-control" aria-label="Amount (to the nearest dollar)" /><span class=
            "input-group-addon">.00</span>
          </div>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Sizing</h3>

          <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1">@</span> <input type=
            "text" class="form-control" placeholder="Username" aria-describedby=
            "sizing-addon1" />
          </div><br />

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">@</span> <input type=
            "text" class="form-control" placeholder="Username" aria-describedby=
            "sizing-addon2" />
          </div><br />

          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3">@</span> <input type=
            "text" class="form-control" placeholder="Username" aria-describedby=
            "sizing-addon3" />
          </div>

          <h3 class="component-title">Checkboxes and radio addons</h3>

          <div class="row">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon"><input type="checkbox" aria-label=
                "Checkbox for following text input" /></span> <input type="text" class=
                "form-control" aria-label="Text input with checkbox" />
              </div>
            </div>

            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon"><input type="radio" aria-label=
                "Radio button for following text input" /></span> <input type="text"
                class="form-control" aria-label="Text input with radio button" />
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Button addons</h3>

          <div class="row">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-btn"><button class="btn btn-secondary" type=
                "button"><span class="input-group-btn">Go!</span></button></span>
                <input type="text" class="form-control" placeholder="Search for..." />
              </div>
            </div>

            <div class="col-lg-6">
              <div class="input-group">
                <input type="text" class="form-control" placeholder=
                "Search for..." /><span class="input-group-btn"><button class=
                "btn btn-secondary" type="button"><span class=
                "input-group-btn">Go!</span></button></span>
              </div>
            </div>
          </div><br />

          <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
              <div class="input-group">
                <span class="input-group-btn"><button class="btn btn-secondary" type=
                "button"><span class="input-group-btn">Hate it</span></button></span>
                <input type="text" class="form-control" placeholder=
                "Product name" /><span class="input-group-btn"><button class=
                "btn btn-secondary" type="button"><span class="input-group-btn">Love
                it</span></button></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Buttons with dropdowns</h3>

          <div class="row">
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-secondary dropdown-toggle"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded=
                  "false">Action</button>

                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                    href="#">Another action</a> <a class="dropdown-item" href=
                    "#">Something else here</a>

                    <div role="separator" class="dropdown-divider"></div><a class=
                    "dropdown-item" href="#">Separated link</a>
                  </div>
                </div><input type="text" class="form-control" aria-label=
                "Text input with dropdown button" />
              </div>
            </div>

            <div class="col-lg-6">
              <div class="input-group">
                <input type="text" class="form-control" aria-label=
                "Text input with dropdown button" />

                <div class="input-group-btn">
                  <button type="button" class="btn btn-secondary dropdown-toggle"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded=
                  "false">Action</button>

                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                    href="#">Another action</a> <a class="dropdown-item" href=
                    "#">Something else here</a>

                    <div role="separator" class="dropdown-divider"></div><a class=
                    "dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Segmented buttons</h3>

          <div class="row">
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-secondary">Action</button>
                  <button type="button" class="btn btn-secondary dropdown-toggle"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded=
                  "false"><span class="sr-only">Toggle Dropdown</span></button>

                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                    href="#">Another action</a> <a class="dropdown-item" href=
                    "#">Something else here</a>

                    <div role="separator" class="dropdown-divider"></div><a class=
                    "dropdown-item" href="#">Separated link</a>
                  </div>
                </div><input type="text" class="form-control" aria-label=
                "Text input with segmented button dropdown" />
              </div>
            </div>

            <div class="col-lg-6">
              <div class="input-group">
                <input type="text" class="form-control" aria-label=
                "Text input with segmented button dropdown" />

                <div class="input-group-btn">
                  <button type="button" class="btn btn-secondary">Action</button>
                  <button type="button" class="btn btn-secondary dropdown-toggle"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded=
                  "false"><span class="sr-only">Toggle Dropdown</span></button>

                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                    href="#">Another action</a> <a class="dropdown-item" href=
                    "#">Something else here</a>

                    <div role="separator" class="dropdown-divider"></div><a class=
                    "dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="jumbotron">Jumbotron</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="jumbotron">
            <h1 class="display-3">Hello, world!</h1>

            <p class="lead">This is a simple hero unit, a simple jumbotron-style
            component for calling extra attention to featured content or information.</p>
            <hr class="m-y-2" />

            <p>It uses utility classes for typography and spacing to space content out
            within the larger container.</p>

            <p class="lead"><a class="btn btn-primary btn-lg" href="#" role=
            "button">Learn more</a></p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-3">Fluid jumbotron</h1>

              <p class="lead">This is a modified jumbotron that occupies the entire
              horizontal space of its parent.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="label">Label</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Example</h3>

          <h1>Example heading <span class="label label-default">New</span></h1>

          <h2>Example heading <span class="label label-default">New</span></h2>

          <h3>Example heading <span class="label label-default">New</span></h3>

          <h4>Example heading <span class="label label-default">New</span></h4>

          <h5>Example heading <span class="label label-default">New</span></h5>

          <h6>Example heading <span class="label label-default">New</span></h6>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Contextual variations</h3><span class=
          "label label-default">Default</span> <span class=
          "label label-primary">Primary</span> <span class=
          "label label-success">Success</span> <span class="label label-info">Info</span>
          <span class="label label-warning">Warning</span> <span class=
          "label label-danger">Danger</span>

          <h3 class="component-title">Pill labels</h3><span class=
          "label label-pill label-default">Default</span> <span class=
          "label label-pill label-primary">Primary</span> <span class=
          "label label-pill label-success">Success</span> <span class=
          "label label-pill label-info">Info</span> <span class=
          "label label-pill label-warning">Warning</span> <span class=
          "label label-pill label-danger">Danger</span>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="list-group">List group</h2>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <h3 class="component-title">Basic</h3>

          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>

            <li class="list-group-item">Dapibus ac facilisis in</li>

            <li class="list-group-item">Morbi leo risus</li>

            <li class="list-group-item">Porta ac consectetur ac</li>

            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>

        <div class="col-lg-3">
          <h3 class="component-title">Labels</h3>

          <ul class="list-group">
            <li class="list-group-item"><span class=
            "label label-default label-pill pull-xs-right">14</span> Cras justo odio</li>

            <li class="list-group-item"><span class=
            "label label-default label-pill pull-xs-right">2</span> Dapibus ac facilisis
            in</li>

            <li class="list-group-item"><span class=
            "label label-default label-pill pull-xs-right">1</span> Morbi leo risus</li>
          </ul>
        </div>

        <div class="col-lg-3">
          <h3 class="component-title">Linked items</h3>

          <div class="list-group">
            <a href="#" class="list-group-item active">Cras justo odio</a> <a href="#"
            class="list-group-item">Dapibus ac facilisis in</a> <a href="#" class=
            "list-group-item">Morbi leo risus</a> <a href="#" class=
            "list-group-item">Porta ac consectetur ac</a> <a href="#" class=
            "list-group-item">Vestibulum at eros</a>
          </div>
        </div>

        <div class="col-lg-3">
          <h3 class="component-title">Button items</h3>

          <div class="list-group">
            <button type="button" class="list-group-item">Cras justo odio</button>
            <button type="button" class="list-group-item">Dapibus ac facilisis
            in</button> <button type="button" class="list-group-item">Morbi leo
            risus</button> <button type="button" class="list-group-item">Porta ac
            consectetur ac</button> <button type="button" class=
            "list-group-item">Vestibulum at eros</button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="component-title">Disabled items</h3>

          <div class="list-group">
            <a href="#" class="list-group-item disabled">Cras justo odio</a> <a href="#"
            class="list-group-item">Dapibus ac facilisis in</a> <a href="#" class=
            "list-group-item">Morbi leo risus</a> <a href="#" class=
            "list-group-item">Porta ac consectetur ac</a> <a href="#" class=
            "list-group-item">Vestibulum at eros</a>
          </div>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Contextual classes</h3>

          <ul class="list-group">
            <li class="list-group-item list-group-item-success">Dapibus ac facilisis
            in</li>

            <li class="list-group-item list-group-item-info">Cras sit amet nibh
            libero</li>

            <li class="list-group-item list-group-item-warning">Porta ac consectetur
            ac</li>

            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
          </ul>

          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-success">Dapibus ac
            facilisis in</a> <a href="#" class=
            "list-group-item list-group-item-info">Cras sit amet nibh libero</a> <a href=
            "#" class="list-group-item list-group-item-warning">Porta ac consectetur
            ac</a> <a href="#" class="list-group-item list-group-item-danger">Vestibulum
            at eros</a>
          </div>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Custom content</h3>

          <div class="list-group">
            <h4 class="list-group-item-heading"><a href="#" class=
            "list-group-item active">List group item heading</a></h4>

            <p class="list-group-item-text"><a href="#" class=
            "list-group-item active">Donec id elit non mi porta gravida at eget metus.
            Maecenas sed diam eget risus varius blandit.</a></p>

            <h4 class="list-group-item-heading"><a href="#" class="list-group-item">List
            group item heading</a></h4>

            <p class="list-group-item-text"><a href="#" class="list-group-item">Donec id
            elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
            blandit.</a></p>

            <h4 class="list-group-item-heading"><a href="#" class="list-group-item">List
            group item heading</a></h4>

            <p class="list-group-item-text"><a href="#" class="list-group-item">Donec id
            elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
            blandit.</a></p>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="modal">Modal</h2>
      </div>

      <h3 class="component-title">Static example</h3>

      <div class="bd-example bd-example-modal">
        <div class="modal" style="display: inherit;position: static;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label=
                "Close"><span aria-hidden="true">&#215;</span></button>

                <h4 class="modal-title">Modal title</h4>
              </div>

              <div class="modal-body">
                <p>One fine body&#8230;</p>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss=
                "modal">Close</button> <button type="button" class="btn btn-primary">Save
                changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="navbar">Navbar</h2>
      </div>

      <h3 class="component-title">Basics</h3><a class="navbar-brand" href="#">Navbar</a>

      <ul class="nav navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="#">Home <span class=
        "sr-only">(current)</span></a></li>

        <li class="nav-item"><a class="nav-link" href="#">Features</a></li>

        <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>

        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
      </ul>

      <form class="form-inline pull-xs-right">
        <input class="form-control" type="text" placeholder="Search" /><button class=
        "btn btn-success-outline" type="submit">Search</button>
      </form>

      <h3 class="component-title">Brand</h3><a class="navbar-brand" href="#">Navbar</a>

      <h1 class="navbar-brand">Navbar</h1>

      <h3 class="component-title">Color schemes</h3>

      <div class="bd-example">
        <a class="navbar-brand" href="#">Navbar</a>

        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="#">Home <span class=
          "sr-only">(current)</span></a></li>

          <li class="nav-item"><a class="nav-link" href="#">Features</a></li>

          <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>

          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>

        <form class="form-inline pull-xs-right">
          <input class="form-control" type="text" placeholder="Search" /><button class=
          "btn btn-info-outline" type="submit">Search</button>
        </form><a class="navbar-brand" href="#">Navbar</a>

        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="#">Home <span class=
          "sr-only">(current)</span></a></li>

          <li class="nav-item"><a class="nav-link" href="#">Features</a></li>

          <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>

          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>

        <form class="form-inline pull-xs-right">
          <input class="form-control" type="text" placeholder="Search" /><button class=
          "btn btn-secondary-outline" type="submit">Search</button>
        </form><a class="navbar-brand" href="#">Navbar</a>

        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="#">Home <span class=
          "sr-only">(current)</span></a></li>

          <li class="nav-item"><a class="nav-link" href="#">Features</a></li>

          <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>

          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>

        <form class="form-inline pull-xs-right">
          <input class="form-control" type="text" placeholder="Search" /><button class=
          "btn btn-primary-outline" type="submit">Search</button>
        </form>
      </div>

      <h3 class="component-title">Collapsible content</h3>

      <div class="collapse" id="exCollapsingNavbar">
        <div class="bg-inverse p-a-1">
          <h4>Collapsed content</h4><span class="text-muted">Toggleable via the navbar
          brand.</span>
        </div>
      </div><button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#exCollapsingNavbar">&#9776;</button><button class=
      "navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target=
      "#exCollapsingNavbar2">&#9776;</button>

      <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <a class="navbar-brand" href="#">Responsive navbar</a>

        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="#">Home <span class=
          "sr-only">(current)</span></a></li>

          <li class="nav-item"><a class="nav-link" href="#">Features</a></li>

          <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>

          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="navs">Navs</h2>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="component-title">Vertical nav</h3>

          <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Another link</a></li>

            <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Inline</h3><a class="nav-link active" href=
          "#">Active</a> <a class="nav-link" href="#">Link</a> <a class="nav-link" href=
          "#">Another link</a> <a class="nav-link disabled" href="#">Disabled</a>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Using data attributes</h3>

          <div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href=
              "#home" role="tab">Home</a></li>

              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile"
              role="tab">Profile</a></li>

              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages"
              role="tab">Messages</a></li>

              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings"
              role="tab">Settings</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel">
                ...
              </div>

              <div class="tab-pane" id="profile" role="tabpanel">
                ...
              </div>

              <div class="tab-pane" id="messages" role="tabpanel">
                ...
              </div>

              <div class="tab-pane" id="settings" role="tabpanel">
                ...
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="component-title">Tabs</h3>

          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Another link</a></li>

            <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Pills</h3>

          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Another link</a></li>

            <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Stacked pills</h3>

          <ul class="nav nav-pills nav-stacked">
            <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>

            <li class="nav-item"><a class="nav-link" href="#">Another link</a></li>

            <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="component-title">Tabs with dropdowns</h3>

          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role=
              "button" aria-haspopup="true" aria-expanded="false">Dropdown</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="#">Another link</a></li>

            <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Pills with dropdowns</h3>

          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role=
              "button" aria-haspopup="true" aria-expanded="false">Dropdown</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item"
                href="#">Another action</a> <a class="dropdown-item" href="#">Something
                else here</a>

                <div class="dropdown-divider"></div><a class="dropdown-item" href=
                "#">Separated link</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="#">Another link</a></li>

            <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">JavaScript behavior</h3>

          <div class="bd-example bd-example-tabs" role="tabpanel">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle=
              "tab" href="#home" role="tab" aria-controls="home" aria-expanded=
              "true">Home</a></li>

              <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab"
              href="#profile" role="tab" aria-controls="profile">Profile</a></li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role=
                "button" aria-haspopup="true" aria-expanded="false">Dropdown</a>

                <div class="dropdown-menu">
                  <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role=
                  "tab" data-toggle="tab" aria-controls="dropdown1">@fat</a> <a class=
                  "dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab"
                  data-toggle="tab" aria-controls="dropdown2">@mdo</a>
                </div>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">
              <div role="tabpanel" class="tab-pane fade in active" id="home"
              aria-labelledby="home-tab">
                <p>Raw denim you probably haven't heard of them jean shorts Austin.
                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure
                terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan
                aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
              </div>

              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby=
              "profile-tab">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                single-origin coffee squid. Exercitation +1 labore velit, blog sartorial
                PBR leggings next level wes anderson artisan four loko farm-to-table
                craft beer twee. Qui photo booth letterpress, commodo enim craft beer
                mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                organic, assumenda labore aesthetic magna delectus mollit. Keytar
                helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.
                Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts
                beard ut DIY ethical culpa terry richardson biodiesel. Art party
                scenester stumptown, tumblr butcher vero sint qui sapiente accusamus
                tattooed echo park.</p>
              </div>

              <div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby=
              "dropdown1-tab">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy
                irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi
                whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk
                vice blog. Scenester cred you probably haven't heard of them, vinyl craft
                beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              </div>

              <div class="tab-pane fade" id="dropdown2" role="tabpanel" aria-labelledby=
              "dropdown2-tab">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art
                party before they sold out master cleanse gluten-free squid scenester
                freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore
                wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia
                PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby
                sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft
                beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                vegan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="pagination">Pagination</h2>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="component-title">Default pagination</h3>

          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" aria-label=
            "Previous"><span aria-hidden="true">&#171;</span> <span class=
            "sr-only">Previous</span></a></li>

            <li class="page-item"><a class="page-link" href="#">1</a></li>

            <li class="page-item"><a class="page-link" href="#">2</a></li>

            <li class="page-item"><a class="page-link" href="#">3</a></li>

            <li class="page-item"><a class="page-link" href="#">4</a></li>

            <li class="page-item"><a class="page-link" href="#">5</a></li>

            <li class="page-item"><a class="page-link" href="#" aria-label=
            "Next"><span aria-hidden="true">&#187;</span> <span class=
            "sr-only">Next</span></a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Disabled and active states</h3>

          <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#" aria-label=
            "Previous"><span aria-hidden="true">&#171;</span> <span class=
            "sr-only">Previous</span></a></li>

            <li class="page-item active"><a class="page-link" href="#">1 <span class=
            "sr-only">(current)</span></a></li>

            <li class="page-item"><a class="page-link" href="#">2</a></li>

            <li class="page-item"><a class="page-link" href="#">3</a></li>

            <li class="page-item"><a class="page-link" href="#">4</a></li>

            <li class="page-item"><a class="page-link" href="#">5</a></li>

            <li class="page-item"><a class="page-link" href="#" aria-label=
            "Next"><span aria-hidden="true">&#187;</span> <span class=
            "sr-only">Next</span></a></li>
          </ul>

          <ul class="pagination">
            <li class="page-item disabled"><span class="page-link" aria-label=
            "Previous"><span aria-hidden="true">&#171;</span> <span class=
            "sr-only">Previous</span></span></li>

            <li class="page-item active"><span class="page-link">1 <span class=
            "sr-only">(current)</span></span></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Sizing</h3>

          <ul class="pagination pagination-lg">
            <li class="page-item"><a class="page-link" href="#" aria-label=
            "Previous"><span aria-hidden="true">&#171;</span> <span class=
            "sr-only">Previous</span></a></li>

            <li class="page-item"><a class="page-link" href="#">1</a></li>

            <li class="page-item"><a class="page-link" href="#">2</a></li>

            <li class="page-item"><a class="page-link" href="#">3</a></li>

            <li class="page-item"><a class="page-link" href="#" aria-label=
            "Next"><span aria-hidden="true">&#187;</span> <span class=
            "sr-only">Next</span></a></li>
          </ul>

          <ul class="pagination pagination-sm">
            <li class="page-item"><a class="page-link" href="#" aria-label=
            "Previous"><span aria-hidden="true">&#171;</span> <span class=
            "sr-only">Previous</span></a></li>

            <li class="page-item"><a class="page-link" href="#">1</a></li>

            <li class="page-item"><a class="page-link" href="#">2</a></li>

            <li class="page-item"><a class="page-link" href="#">3</a></li>

            <li class="page-item"><a class="page-link" href="#" aria-label=
            "Next"><span aria-hidden="true">&#187;</span> <span class=
            "sr-only">Next</span></a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="component-title">Pager Default example</h3>

          <ul class="pager">
            <li><a href="#">Previous</a></li>

            <li><a href="#">Next</a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Aligned links</h3>

          <ul class="pager">
            <li class="pager-prev"><a href="#">Older</a></li>

            <li class="pager-next"><a href="#">Newer</a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h3 class="component-title">Optional disabled state</h3>

          <ul class="pager">
            <li class="pager-prev disabled"><a href="#">Older</a></li>

            <li class="pager-next"><a href="#">Newer</a></li>
          </ul>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="popovers">Popovers</h2>
      </div>

      <h3 class="component-title">Four directions</h3>

      <div class="bd-example popover-demo">
        <div class="bd-example-popovers">
          <button type="button" class="btn btn-secondary" data-container="body"
          data-toggle="popover" data-placement="top" data-content=
          "Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on
          top</button> <button type="button" class="btn btn-secondary" data-container=
          "body" data-toggle="popover" data-placement="right" data-content=
          "Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on
          right</button> <button type="button" class="btn btn-secondary" data-container=
          "body" data-toggle="popover" data-placement="bottom" data-content=
          "Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on
          bottom</button> <button type="button" class="btn btn-secondary" data-container=
          "body" data-toggle="popover" data-placement="left" data-content=
          "Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on
          left</button>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="progress">Progress</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Example</h3>0%25%50%75%100%
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Contextual alternatives</h3>25%50%75%100%
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Striped</h3>10%25%50%75%100%
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Animated stripes</h3>

          <div class="bd-example">
            25%<button type="button" class=
            "btn btn-secondary bd-activate-animated-progressbar" data-toggle="button"
            aria-pressed="false" autocomplete="off">Toggle animation</button>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="tooltips">Tooltips</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="component-title">Example</h3>Hover over the links below to see
          tooltips:

          <div class="bd-example tooltip-demo">
            <p class="muted">Tight pants next level keffiyeh <a href="#" data-toggle=
            "tooltip" title="Default tooltip">you probably</a> haven't heard of them.
            Photo booth beard raw denim letterpress vegan messenger bag stumptown.
            Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american
            apparel <a href="#" data-toggle="tooltip" title="Another tooltip">have a</a>
            terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo
            thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse
            vegan chambray. A really ironic artisan <a href="#" data-toggle="tooltip"
            title="Another one here too">whatever keytar</a>, scenester farm-to-table
            banksy Austin <a href="#" data-toggle="tooltip" title="The last tip!">twitter
            handle</a> freegan cred raw denim single-origin coffee viral.</p>
          </div>
        </div>

        <div class="col-lg-6">
          <h3 class="component-title">Interactive demo</h3>Hover over the buttons below
          to see their tooltips.

          <div class="bd-example tooltip-demo">
            <div class="bd-example-tooltips">
              <button type="button" class="btn btn-secondary" data-toggle="tooltip"
              data-placement="top" title="Tooltip on top">Tooltip on top</button>
              <button type="button" class="btn btn-secondary" data-toggle="tooltip"
              data-placement="right" title="Tooltip on right">Tooltip on right</button>
              <button type="button" class="btn btn-secondary" data-toggle="tooltip"
              data-placement="bottom" title="Tooltip on bottom">Tooltip on
              bottom</button> <button type="button" class="btn btn-secondary"
              data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip
              on left</button>
            </div>
          </div>
        </div>
      </div>

      <div class="sub-header">
        <h2 class="component-title" id="typography">Typography</h2>
      </div>

      <h3 class="component-title">Headings</h3>

      <div class="bd-example bd-example-type">
        <table class="table">
          <tbody>
            <tr>
              <td>
                <h1>h1. Bootstrap heading</h1>
              </td>

              <td class="type-info">Semibold 36px</td>
            </tr>

            <tr>
              <td>
                <h2>h2. Bootstrap heading</h2>
              </td>

              <td class="type-info">Semibold 30px</td>
            </tr>

            <tr>
              <td>
                <h3>h3. Bootstrap heading</h3>
              </td>

              <td class="type-info">Semibold 24px</td>
            </tr>

            <tr>
              <td>
                <h4>h4. Bootstrap heading</h4>
              </td>

              <td class="type-info">Semibold 18px</td>
            </tr>

            <tr>
              <td>
                <h5>h5. Bootstrap heading</h5>
              </td>

              <td class="type-info">Semibold 14px</td>
            </tr>

            <tr>
              <td>
                <h6>h6. Bootstrap heading</h6>
              </td>

              <td class="type-info">Semibold 12px</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3 class="component-title">Customizing headings</h3>

      <p>Use the included utility classes to recreate the small secondary heading text
      from Bootstrap 3.</p>

      <h3>Fancy display heading <small class="text-muted">With faded secondary
      text</small></h3>

      <h3 class="component-title">Display headings</h3>

      <p>Traditional heading elements are designed to work best in the meat of your page
      content. When you need a heading to stand out, consider using a <strong>display
      heading</strong>&#8212;a larger, slightly more opinionated heading style.</p>

      <div class="bd-example bd-example-type">
        <table class="table">
          <tbody>
            <tr>
              <td>
                <h1 class="display-1">Display 1</h1>
              </td>
            </tr>

            <tr>
              <td>
                <h1 class="display-2">Display 2</h1>
              </td>
            </tr>

            <tr>
              <td>
                <h1 class="display-3">Display 3</h1>
              </td>
            </tr>

            <tr>
              <td>
                <h1 class="display-4">Display 4</h1>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3 class="component-title">Lead</h3>

      <p>Make a paragraph stand out by adding <code>.lead</code>.</p>

      <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
      auctor. Duis mollis, est non commodo luctus.</p>

      <h3 class="component-title">Inline text elements</h3>

      <p>Styling for common inline HTML5 elements.</p>

      <p>You can use the mark tag tohighlighttext.</p>

      <p><del>This line of text is meant to be treated as deleted text.</del></p>

      <p><s>This line of text is meant to be treated as no longer accurate.</s></p>

      <p><ins>This line of text is meant to be treated as an addition to the
      document.</ins></p>

      <p><u>This line of text will render as underlined</u></p>

      <p><small>This line of text is meant to be treated as fine print.</small></p>

      <p><strong>This line rendered as bold text.</strong></p>

      <p><em>This line rendered as italicized text.</em></p>

      <h3 class="component-title">Abbreviations</h3>

      <p><abbr title="attribute">attr</abbr></p>

      <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>

      <h3 class="component-title">Blockquotes</h3>

      <blockquote class="blockquote">
        <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
        posuere erat a ante.</p>
      </blockquote>

      <h3 class="component-title">Naming a source</h3>

      <blockquote class="blockquote">
        <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
        posuere erat a ante.</p>Someone famous in <cite title="Source Title">Source
        Title</cite>
      </blockquote>

      <h3 class="component-title">Reverse layout</h3>

      <blockquote class="blockquote blockquote-reverse">
        <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
        posuere erat a ante.</p>Someone famous in <cite title="Source Title">Source
        Title</cite>
      </blockquote>

      <h3 class="component-title">Lists Unstyled</h3>

      <ul class="list-unstyled">
        <li>Lorem ipsum dolor sit amet</li>

        <li>Consectetur adipiscing elit</li>

        <li>Integer molestie lorem at massa</li>

        <li>Facilisis in pretium nisl aliquet</li>

        <li>Nulla volutpat aliquam velit

          <ul>
            <li>Phasellus iaculis neque</li>

            <li>Purus sodales ultricies</li>

            <li>Vestibulum laoreet porttitor sem</li>

            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>

        <li>Faucibus porta lacus fringilla vel</li>

        <li>Aenean sit amet erat nunc</li>

        <li>Eget porttitor lorem</li>
      </ul>

      <h3 class="component-title">Lists Inline</h3>

      <ul class="list-inline">
        <li class="list-inline-item">Lorem ipsum</li>

        <li class="list-inline-item">Phasellus iaculis</li>

        <li class="list-inline-item">Nulla volutpat</li>
      </ul>

      <h3 class="component-title">Horizontal description</h3>

      <dl class="dl-horizontal">
        <dt class="col-sm-3">Description lists</dt>

        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

        <dt class="col-sm-3">Euismod</dt>

        <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia
        odio sem nec elit.</dd>

        <dd class="col-sm-9 col-sm-offset-3">Donec id elit non mi porta gravida at eget
        metus.</dd>

        <dt class="col-sm-3">Malesuada porta</dt>

        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>

        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris
        condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
      </dl>
    </div>
  </div><!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity=
  "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin=
  "anonymous" type="text/javascript">
</script><script type="text/javascript">
//<![CDATA[
  window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')
  //]]>
  </script><script src="js/popper.min.js" type="text/javascript">
</script><script src="js/bootstrap.min.js" type="text/javascript">
</script>
</body>
</html>
