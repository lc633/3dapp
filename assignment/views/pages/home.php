<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sports</title>
    <link href="style/bootstrap.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.x3dom.org/download/x3dom.js"></script>
    <script src="https://getbootstrap.net/Application/Home/View/Public/js/bootstrap.bundle.min.js"></script>
    <link href="https://www.x3dom.org/download/x3dom.css" rel="stylesheet"/>
    <link href="style/custom.css" rel="stylesheet"/>
    
</head>
<body>
<header id="headerColor" class="text-white text-center py-3">
    <h1>Sports 3D Models Exhibit</h1>
</header>

<div id="bodyColor" class="main_contents mt-4">
    <div class="row">
        <div class="col-sm-8 pt-3 pb-3">
            <div class="border">
                <div class="bg-secondary text-white p-3">
                    <h2>3D Models</h2>
                    <p>Click to switch the 3D model you want to see.</p>
                </div>
                <div class="container p-2">
                    <div class="row justify-content-center">
                    <?php foreach($modelList as $model) { ?>
                        <div class="text-center btn-flex mx-2">
                            <button class="btn btn-success btn-md btn-block mb-3" onclick="changeModel('<?php echo $model->name ?>')">
                                <?php echo $model->name ?>
                            </button>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="container">
                    <x3d id="wire">
                        <scene>
                            <Switch id='SceneSwitch' whichChoice="0">
                                <inline id="x3dModel" mapDEFToID="true" nameSpaceName="model"
                                        onclick="changeAnimation()"
                                        url="">
                                </inline>
                            </Switch>
                        </scene>
                    </x3d>
                </div>
                <div id="model-desc" class="container">
                    Desc
                </div>
                <div class="container mt-3 border-top">
                    <div class="row justify-content-center grid-container">
                        <div class="dropdown mx-2 grid-item">
                            <button id="dropdownMenuButton" aria-expanded="false" aria-haspopup="true"
                                    class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                                Cameras
                            </button>
                            <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="changeCamera('Front')">Front</a>
                                <a class="dropdown-item" href="#" onclick="changeCamera('Right')">Right</a>
                                <a class="dropdown-item" href="#" onclick="changeCamera('Left')">Left</a>
                                <a class="dropdown-item" href="#" onclick="changeCamera('Back')">Back</a>
                                <a class="dropdown-item" href="#" onclick="changeCamera('Bottom')">Bottom</a>
                                <a class="dropdown-item" href="#" onclick="changeCamera('Top')">Top</a>
                            </div>
                        </div>
                        <div class="dropdown mx-2 grid-item">
                            <button id="dropdownMenuButton" aria-expanded="false" aria-haspopup="true"
                                    class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                                Animation
                            </button>
                            <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="changeAnimation('X')">RoatX</a>
                                <a class="dropdown-item" href="#" onclick="changeAnimation('Y')">RoatY</a>
                                <a class="dropdown-item" href="#" onclick="changeAnimation('Z')">RoatZ</a>
                                <a class="dropdown-item" href="#" onclick="stopAnimation()">Stop</a>
                            </div>
                        </div>
                        <div class="dropdown mx-2 grid-item">
                            <button id="dropdownMenuButton" aria-expanded="false" aria-haspopup="true"
                                    class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                                Render
                            </button>
                            <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="changeRender('Polygon')">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="changeRender('Wireframe')">Wireframe</a>
                                <a class="dropdown-item" href="#" onclick="changeRender('Vertex')">Vertex</a>
                            </div>
                        </div>
                        <div class="dropdown mx-2 grid-item">
                            <button id="dropdownMenuButton" aria-expanded="false" aria-haspopup="true"
                                    class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                                Lights
                            </button>
                            <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="lightSwitch('point')">Point light</a>
                                <a class="dropdown-item" href="#" onclick="lightSwitch('spot')">Spot light</a>
                                <a class="dropdown-item" href="#" onclick="lightSwitch('directional')">Directional
                                    light</a>
                                <a class="dropdown-item" href="#" onclick="headlight()">Headlight</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 pt-3 pb-3">
            <div class="border">
                <div class="bg-secondary text-white  p-3">
                    <h2>Textures</h2>
                    <p>Choose a texture switch you like.</p>
                </div>
                <div class="container mt-2">
                    <div class="grid-container texture-container">
                        <div class="grid-item">xx</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footerColor" class="text-white text-center py-3 mt-3">
    <span>
    &copy; 2023 3D Models App
    </span>
    |
    <a class="px-2 text-light" href="javascript:changeMainStyle()">Restyle</a>
    |
    <a class="px-2 text-light" href="javascript:changeMainStyle(true)">Reset</a>
</footer>
<script src="./js/restyle.js"></script>
<script src="./js/index.js"></script>
</body>
</html>
