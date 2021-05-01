
const cardBody = {
    add: document.getElementsByClassName('add-to-cart'),
};
for (var i = 0; i < cardBody.add.length; i++) {
    cardBody.add[i].addEventListener('click', function () {
        addToCart(this);
    });
}

function addToCart(t) {
    let attribute = t.getAttribute('data-product-id');
    let xhr;


    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest;
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject;
    }

    let postData = 'id_product=' + attribute;// input

    xhr.open('POST', 'Controller/ajax-add.php', true);

    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.send(postData);

    xhr.onload = function () {
        document.getElementById('number-products').innerHTML = xhr.responseText;
    }
}

const table = {
    remove: document.getElementsByClassName('remove-to-cart'),
};
for (var i = 0; i < table.remove.length; i++) {// Pentru fiecare element din array const Table voi folosi addEventListener cu functia removeToCart
    table.remove[i].addEventListener('click', function () {
        removeToCart(this);
    });
}

function removeToCart(t) {
    let attribute = t.getAttribute('data-product-id');
    let xhr;

    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest;
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject;
    }

    let postData = 'id_product=' + attribute;

    xhr.open('POST', 'Controller/ajax-remove.php', true);

    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.send(postData);

    xhr.onload = function () {
        window.location.reload();
        // document.getElementById('delete').innerHTML= xhr.responseText;
    }
}

const removeSection = {
    removeAll: document.getElementsByClassName('remove-all'),
};

for (var i = 0; i < removeSection.removeAll.length; i++) {
    removeSection.removeAll[i].addEventListener('click', function () {
        removeAll(this);
    });
}

function removeAll(t) {
    let attribute = t.getAttribute('data-product-id');
    let xhr;

    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest;
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject;
    }

    let postData = 'id_product=' + attribute;

    xhr.open('POST', 'Controller/ajax-remove-all.php', true);

    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.send(postData);

    xhr.onload = function () {
        window.location.reload();
    }
}