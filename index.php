
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="gridstack.js Build interactive dashboards in minutes." />
  <meta name="keywords"
    content="gridstack, typescript, jquery, grid, layout, drag-n-drop, widgets, js, javascript, gridstack.js, dashboard" />
  <title>gridstack.js | Build interactive dashboards in minutes.</title>

  <script src="https://gridstackjs.com/node_modules/gridstack/dist/es5/gridstack-all.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/gridstack@latest/dist/gridstack.all.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.16.2/build/highlight.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gridstack@latest/dist/gridstack.min.css" />

  <style type="text/css">
    .list-group-item{
      padding: 0;
      border: none;
    }
    .grid-container {
      padding: 15px;
      border: 1px solid white;
      max-width: 1000px;
    }
    .center {
      margin-left: auto;
      margin-right: auto;
    }
    .grid-stack-item {
      border: 0;
    }
    .grid-stack-item-content {
      background-color: white;
      text-align: center;
    }
    h1 {
      text-align: center;
      font-size: 3rem;
      margin-top: 2rem;
      margin-bottom: 1.5rem;
    }
    .card {
      background: none;
    }
    section {
      padding: 0 15px 0 15px;
    }
    .grid-stack-item-removing {
      opacity: 0.8;
      filter: blur(5px);
    }
    @media all and (max-width: 575px) {
      #hero {
        margin-top: 32px;
      }
    }
    .logo {
      display: inline;
      margin-right: 15px;
    }
    #trash {
      background-color: #cc6857;
    }
    .newWidget > .grid-stack-item-content {
      background-color: #6cad84;
    }
    #__card_header {
    position: sticky;
    top: 0;
    z-index: 1000;
    background-color: white;
    }

  </style>
</head>

<body>




    <div class="container">
      <div class="row col-sm">
           <div class="grid-stack" id="simple-grid"></div>
       
      </div>
    </div>

    




    

  <script type="text/javascript">
   

    var card_one=` <div >
            <div class="card-header bg-info text-white" id="__card_header">
                <h3 class="card-title"> Task List</h3>
            </div>

            <div class="card-body" >
                <ul class="list-group" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height:50px;">
                    <li class="list-group-item" id="drag1"  draggable="true" ondragstart="drag(event)">
                        <div class="card mb-2">
                            <div class="card-header"><h5>Https Request not found1</h5></div>
                            <div class="card-body">
                                <img class="img-fluid" src="https://w7.pngwing.com/pngs/796/876/png-transparent-avatar-boy-cheerful-mark-avatar-vol-2-icon.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item " id="drag2"  draggable="true" ondragstart="drag(event)">
                        <div class="card mb-2">
                            <div class="card-header"><h5>Https Request not found2</h5></div>
                            <div class="card-body">
                                <img class="img-fluid" src="https://w7.pngwing.com/pngs/796/876/png-transparent-avatar-boy-cheerful-mark-avatar-vol-2-icon.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item " id="drag3"  draggable="true" ondragstart="drag(event)">
                        <div class="card mb-2">
                            <div class="card-header"><h5>Https Request not found3</h5></div>
                            <div class="card-body">
                                <img class="img-fluid" src="https://w7.pngwing.com/pngs/796/876/png-transparent-avatar-boy-cheerful-mark-avatar-vol-2-icon.png" alt="">
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>`;
    var card_two=` <div  >
            <div class="card-header bg-warning text-white" id="__card_header">
                <h3 class="card-title"> Task Processing</h3>
            </div>

            <div class="card-body">
                <ul class="list-group" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"  style="min-height:50px;">
                <li class="list-group-item " >
                        <div class="card mb-2" id="drag4"  draggable="true" ondragstart="drag(event)">
                            <div class="card-header"><h5>Https Request not found4</h5></div>
                            <div class="card-body">
                                <img class="img-fluid" src="https://w7.pngwing.com/pngs/796/876/png-transparent-avatar-boy-cheerful-mark-avatar-vol-2-icon.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item " id="drag5"  draggable="true" ondragstart="drag(event)">
                        <div class="card mb-2">
                            <div class="card-header"><h5>Https Request not found5</h5></div>
                            <div class="card-body">
                                <img class="img-fluid" src="https://w7.pngwing.com/pngs/796/876/png-transparent-avatar-boy-cheerful-mark-avatar-vol-2-icon.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" id="drag6"  draggable="true" ondragstart="drag(event)">
                        <div class="card mb-2">
                            <div class="card-header"><h5>Https Request not found6</h5></div>
                            <div class="card-body">
                                <img class="img-fluid" src="https://w7.pngwing.com/pngs/796/876/png-transparent-avatar-boy-cheerful-mark-avatar-vol-2-icon.png" alt="">
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>`;
    var card_three=` <div  >
            <div class="card-header bg-success text-white" id="__card_header">
                <h3 class="card-title"> Task Completed</h3>
            </div>

            <div class="card-body cardbody" >
                <ul class="list-group" id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"  style="min-height:50px;">
                      <li class="list-group-item" id="drag7"  draggable="true" ondragstart="drag(event)">
                        <div class="card mb-2">
                            <div class="card-header"><h5>Https Request not found7</h5></div>
                            <div class="card-body">
                                <img class="img-fluid" src="https://w7.pngwing.com/pngs/796/876/png-transparent-avatar-boy-cheerful-mark-avatar-vol-2-icon.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" id="drag8"  draggable="true" ondragstart="drag(event)">
                        <div class="card mb-2">
                            <div class="card-header"><h5>Https Request not found8</h5></div>
                            <div class="card-body">
                                <img class="img-fluid" src="https://w7.pngwing.com/pngs/796/876/png-transparent-avatar-boy-cheerful-mark-avatar-vol-2-icon.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" id="drag9"  draggable="true" ondragstart="drag(event)">
                        <div class="card mb-2">
                            <div class="card-header"><h5>Https Request not found9</h5></div>
                            <div class="card-body">
                                <img class="img-fluid" src="https://w7.pngwing.com/pngs/796/876/png-transparent-avatar-boy-cheerful-mark-avatar-vol-2-icon.png" alt="">
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>`;
    var simple = [
      {x: 0, y: 0, w: 4, h: 8, content: card_one},
      {x: 4, y: 0, w: 4, h: 8, content: card_two},
      {x: 8, y: 0, w: 4, h: 8, content: card_three},

    ];


    var simpleGrid = GridStack.init({
      draggable: {
        handle: '#__card_header',
      },
      

      margin: 5,
      disableOneColumnMode: true,
    }, '#simple-grid');
    simpleGrid.load(simple);

    //$('.list-group-item').draggable();
    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      var x = ev.currentTarget;
      // var id = x.id;
      x.prepend(document.getElementById(data));
      // ev.target.appendChild(document.getElementById(data));
    }
    
  </script>
</body>

</html>
