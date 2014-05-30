<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="issue tracker project for Stan's class">
    <meta name="wenbin ren" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Issue Tracker Project</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    <!-- This is for Facebook -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- This is for Facebook -->

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Issue Tracker</a>
          </div><!-- nav-header -->
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/gallery">Gallery</a></li>
              <li><a href="/dashboard">Dashboard</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#"
                        class="dropdown-toggle"
                        data-toggle="dropdown">
                        Social
                        <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="socials"><!-- Place this tag where you want the +1 button to render -->
                        <g:plusone annotation="inline" width="150"></g:plusone>
                      </li>

                      <li class="socials">
                        <div class="fb-like" data-send="false" data-width="150" data-show-faces="true"></div>
                      </li>
                      <li class="socials">
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                      </li>
                  </ul>
              </li><!-- socails dropdown list -->
              <li><a href="/registe">Registe</a></li>
              <li><a href="/login">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div><!-- nav bar -->

      <div class="main-content">
        @yield('content')
      </div>

    </div><!-- /.container -->







<!-- examples -->
<div class="container">

<hr>
<p class="lead">Examples:</p>

  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            Collapsible Group Item #1
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            Collapsible Group Item #2
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
            Collapsible Group Item #3
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
        <div class="panel-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
  </div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
    <li><a href="#profile" data-toggle="tab">Profile</a></li>
    <li><a href="#messages" data-toggle="tab">Messages</a></li>
    <li><a href="#settings" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane fade in active" id="home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tempore quam eligendi numquam exercitationem! Nam, laudantium, dolorum, vel ipsam qui ad sint veritatis molestias culpa impedit veniam odio dignissimos quisquam quasi  </div>
    <div class="tab-pane fade" id="profile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, harum, eum, quae aspernatur omnis obcaecati perferendis dignissimos porro magnam quo animi neque quibusdam natus corporis pariatur aliquam esse quam iste.</div>
    <div class="tab-pane fade" id="messages">maiores quidem sequi dolore quam earum iusto accusamus cupiditate vero optio doloribus debitis velit ducimus exercitationem modi architecto illo. Ipsa, fugiat ea velit eligendi provident ducimus unde molestiae quasi quibusdam consequuntur</div>
    <div class="tab-pane fade" id="settings">iste fuga aliquid voluptatem natus numquam magnam doloribus recusandae ad nobis rem dignissimos obcaecati iure minus ab debitis temporibus quisquam accusamus quae perspiciatis odio eius cum magni modi sunt tempora aperiam assumenda rerum odit eaque architecto vel facilis.</div>
  </div>

  <!-- Button trigger modal -->
  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    List all the emerging Issues
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, nulla, temporibus, atque laudantium hic dolores explicabo saepe magnam veritatis reprehenderit ut aliquid perferendis sed rem eligendi officiis consectetur quisquam maxime!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <ul class="list-group">
    <li class="list-group-item"><span class="badge">14</span>Lorem ipsum dolor</li>
    <li class="list-group-item"><span class="badge">2</span>sit amet, consectetur adipisicing</li>
    <li class="list-group-item"><span class="badge">1</span>elit. Nihil, facere</li>
  </ul>

  <div class="alert alert-warning alert-dismissable">
    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Warning!</strong> Better check yourself, you're not looking too good.
  </div>

  <div class="jumbotron">
    <h1>Hello, world!</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, tenetur, est, iste, animi quaerat numquam delectus expedita quo ullam cupiditate ipsam architecto corporis nesciunt officia ipsum dignissimos quibusdam nisi sint.</p>
    <p><a href="" class="btn btn-primary btn-lg" role="button">Learn more</a></p>
  </div>

  <ul class="pager">
    <li class="previous"><a href="#">&larr; Older</a></li>
    <li class="next"><a href="#">Newer &rarr;</a></li>
  </ul>

  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>

  <ul class="pagination">
    <li><a href="#">&laquo;</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
  </ul>

  <div class="btn-group">
    <button type="button" class="btn btn-default">1</button>
    <button type="button" class="btn btn-default">2</button>

    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
  </div>

  <div class="btn-group btn-group-lg">
    <button type="button" class="btn btn-default">Left</button>
    <button type="button" class="btn btn-default">Middle</button>
    <button type="button" class="btn btn-default">Right</button>
  </div>

  <form role="form">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" id="exampleInputFile">
      <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Check me out
      </label>
    </div>
    <textarea class="form-control" rows="3"></textarea>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

  <form class="form-horizontal">
    <fieldset>
      <legend>Login</legend>
      <div class="control-group">
        <label class="control-label" for="username">User Name</label>
        <div class="controls">
          <input id="username" type="text">
          <p class="help-block">Please enter registration name.</p>
        </div>
      </div>

      <div class="control-group">
        <label class="control-lable" for="password">Password</label>
        <div class="controls">
          <input id="password" type="password">
          <p class="help-block">Please enter password</p>
        </div>
      </div>
    </fieldset>

    <div class="form-actions">
    <button type="submit" class="btn btn-primary"><i class="icon-comment"></i> Login</button>
    </div>
  </form>
  <br>

  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, deleniti veritatis neque accusamus reiciendis! Quisquam, minus, aliquid, delectus sit harum maiores ex impedit modi magnam rerum aut incidunt ducimus praesentium.</p>
    </div>

    <!-- Table -->
    <table class="table table-striped table-bordered table-condensed">
      <thead>
        <tr>
          <th>AAA</th>
          <th>BBB</th>
          <th>CCC</th>
          <th>DDD</th>
        </tr>
      </thead>
      <tr>
        <th>a</th>
        <th>b</th>
        <th>c</th>
        <th>d</th>
      </tr>
      <tr>
        <th>e</th>
        <th>f</th>
        <th>g</th>
        <th>h</th>
      </tr>
      <tr>
        <th>e</th>
        <th>f</th>
        <th>g</th>
        <th>h</th>
      </tr>
    </table>
  </div>

  <p>This is a <code>&lt;h1&gt;</code> tag. try <kbd>ctrl+m</kbd></p>

<pre class="prettyprint linenums">
&lt;ul&gt;
  &lt;li&gt;Drupal&lt;/li&gt;
  &lt;li&gt;Joomla&lt;/li&gt;
  &lt;li&gt;Wordpress&lt;/li&gt;
&lt;/ul&gt;
</pre>

  <div class="row">
    <div class="col-md-4">
    <ul>
      <li>Drupal</li>
      <li>Joomla</li>
      <li>Wordpress</li>
    </ul>
    </div>

    <div class="col-md-4">
    <ol>
      <li>Drupal</li>
      <li>Joomla</li>
      <li>Wordpress</li>
    </ol>
    </div>

    <div class="col-md-4">
    <dl class="dl-horizontal">
      <dt>Drupal</dt>
        <dd>123</dd>
      <dt>Joomla</dt>
        <dd>234</dd>
      <dt>Wordpress</dt>
        <dd>345</dd>
    </dl>
    </div>
  </div>
</div>

<div class="container">
  <h1 class="page-header">Layout<small> Bootstrap grid web</small></h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nibh est, sagittis sit amet consectetur a, rhoncus dignissim ligula. Curabitur at neque eget quam accumsan vestibulum. Maecenas facilisis tellus quis nisl facilisis eget mollis lectus feugiat. Etiam pharetra mattis ultrices. In ac mi metus, ac pharetra ipsum. Aenean imperdiet sem purus. Suspendisse quis odio eu neque varius posuere. Fusce tincidunt tincidunt arcu non viverra. Vivamus dui eros, rhoncus cursus porta quis, sollicitudin a ante. Aliquam porta euismod sollicitudin.</p>

  <div class="row">
    <div class="col-md-4">
      <h2 class="page-header">Block One</h2>
      <p>consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nibh est, sagittis sit amet consectetur a, rhoncus dignissim ligula. Curabitur at neque eget quam accumsan vestibulum. </p>
    </div>

    <div class="col-md-4">
      <h2 class="page-header">Block Two</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nibh est, sagittis sit amet consectetur a, rhoncus dignissim ligula. Curabitur at neque eget. </p>
    </div>

    <div class="col-md-4">
      <h2 class="page-header">Block Three</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nibh est, sagittis sit amet consectetur a, rhoncus dignissim ligula. Curabitur at neque eget quam accumsan vestibulum. </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="page-header">Main Content</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nibh est, sagittis sit amet consectetur a, rhoncus dignissim ligula. Curabitur at neque eget quam accumsan vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nibh est, sagittis sit amet consectetur a, rhoncus dignissim ligula. Curabitur at neque eget quam accumsan vestibulum.</p>
    </div>

    <div class="col-md-4">
      <h2 class="page-header">Side Bar</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nibh est, sagittis sit amet consectetur a, rhoncus dignissim ligula. Curabitur at neque eget</p>
    </div>
  </div>

  <blockquote class="blockquote-reverse"><p>Lorem ipsum <abbr class="initialism" title="DooooooLLLooor">dolor</abbr> sit amet, consectetur adipiscing elit. Nulla nibh est, sagittis sit amet consectetur a, rhoncus dignissim ligula. Curabitur at neque eget quam accumsan vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nibh est, sagittis sit amet consectetur a, rhoncus dignissim ligula. Curabitur at neque eget quam accumsan vestibulum.</p>

  <footer>Lorem ipsum dolor sit amet, <cite title="Consectetur">consectetur</cite> adipiscing elit.</footer></blockquote>
</div>
<!-- examples end-->

    <!-- This is for Google Plus -->
    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    <!-- This is for Google Plus -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="script/default.js"></script>
  </body>
</html>
