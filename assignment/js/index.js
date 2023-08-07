/**
 * @typedef {'Front' | 'Right' | 'Left' | 'Back' | 'Bottom' | 'Top'} Direction
 *
 */
/**
 * @typedef {'Polygon' | 'Wireframe' | 'Vertex' } RenderType
 *
 */
/**
 * @typedef {'X' | 'Y' | 'Z' | undefined } RoatType
 *
 */

window.onload = function () {
    $(function () {
        changeMainStyle();
        changeModel('wrestling');
    });
};


const modelConfig = {
    'golf': {
        model: './application/assets/x3d/golf/model.x3d',
        textures: ['texture.jpg', 'texture2.jpg'],
        desc: `A precision sport that involves hitting a small ball into a series of holes using various clubs, aiming for the lowest number of strokes.`
    },
    'rugby': {
        model: './application/assets/x3d/rugby/model.x3d',
        textures: ['texture.jpg', 'texture2.jpg'],
        desc: `A physically demanding team sport characterized by intense physical contact and running with an oval-shaped ball, with the objective of scoring points by crossing the opponent's goal line or kicking the ball through goalposts.`
    },
    'wrestling': {
        model: './application/assets/x3d/wrestling/model.x3d',
        textures: ['texture.jpg', 'texture2.jpg', 'texture3.jpg', 'texture4.jpg'],
        desc: `Boxing, also known as pugilism or the sweet science, is a combat sport that involves two individuals
                    engaging in a physical contest of skill, speed, and strategy.`
    }
};

function changeModel(type) {
    const currModel = modelConfig[type];
    const textures = currModel.textures;
    let html = '';
    textures.forEach((it) => {
        const src = `./application/assets/x3d/${type}/${it}`;
        html += `<div class="grid-item border" onclick="changeTexture('./${it}')">
                <img data-url="" src="${src}" />
            </div>`;
    });
    $('.texture-container').html(html);
    $('#model-desc').text(currModel.desc);
    $('#x3dModel').attr('url', currModel.model);
}

/**
 *
 * @param {RoatType} [type]
 */
function changeAnimation(type = 'X') {
    stopAnimation();
    const dom = $('#model__RotationTimer' + type);
    dom.attr('enabled', dom.attr('enabled') === 'true' ? 'false' : 'true');
}

function stopAnimation() {
    const dom1 = $('#model__RotationTimerX');
    dom1.attr('enabled', 'false');

    const dom2 = $('#model__RotationTimerY');
    dom2.attr('enabled', 'false');

    const dom3 = $('#model__RotationTimerZ');
    dom3.attr('enabled', 'false');
}


function changeTexture(url) {
    $('#model__texture').attr('url', url);
}

/**
 *
 * @param {Direction} direction
 */
function changeCamera(direction) {
    $('#model__Camera' + direction).attr('bind', 'true');
}

/**
 *
 * @param {RenderType} type
 */
function changeRender(type) {
    const x3d = document.getElementById('wire');
    switch (type) {
        case 'Polygon':
            x3d.runtime.togglePoints(false);
            break;
        case 'Vertex':
            x3d.runtime.togglePoints(true);
            break;
        case 'Wireframe':
            x3d.runtime.togglePoints(false);
            break;
    }
}

function lightSwitch(id) {
    const light = document.getElementById('model__' + id);
    const value = light.getAttribute('on') === 'TRUE' ? 'FALSE' : 'TRUE';
    light.setAttribute('on', value);
}

function headlight() {
    const h = document.getElementById("model__head");
    if (h.getAttribute('headlight') == 'true')
        h.setAttribute('headlight', 'false');
    else
        h.setAttribute('headlight', 'true');
}
