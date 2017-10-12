function login(number)
{
    var number = parseInt(number);
    var span = document.getElementById('content-button-span');
//                    if (document.getElementById('login_1').style.display === "none" && number === 1) {
    document.getElementById('login_1').style.display="block";
    if (number === 1) {
        document.getElementById('login_2').style.display="none";
        family(span, 1);
    } else {
        document.getElementById('login_2').style.display="block";
        document.getElementById('login_1').style.display="none";
        family(span, 2);
    }
    return false;
}
function family(span, number)
{
    var span = span;
    var number = parseInt(number);
    if (!(number === 1)) {
        span.style.marginLeft = "82px";
    } else {
        span.style.marginLeft = "17px";
    }
}
function varification(get_name)
{
    var status = true;
    var number = null;
    var patterns = new Object();
    patterns.email = /^[\d\w]{6,25}@[\d\w]{1,8}.com$/;
    var label = get_classs('error');
    if (!is_true_and_false(get_name.user.value)) {
        if (label[0].className === "error") {
            label[0].className += " is-visible";
            label[0].innerHTML = "请填写姓名";
        }
    }
    if (label[0].className === "error") {
        $.ajax({
            url: '/api/user',
            type: 'post',
            data: {
                user: get_name.user.value
            },
            success: function (data) {
                if (data == 0) {
                    label[0].className += " is-visible";
                    label[0].innerHTML = "姓名已存在";
                }
            }
        });
    }
    if (!is_true_and_false(get_name.email.value)) {
        if (label[1].className === "error") {
            label[1].className += " is-visible";
            label[1].innerHTML = "请填写邮箱";
            //console.log(get_name.email.value[0]);

        }
    } else if (patterns.email.test(get_name.email.value)) {
        if (label[1].className === "error") {
            label[1].className += " is-visible";
            label[1].className = "请填写正确的邮箱";
        }
    }
    if (!is_true_and_false(get_name.password.value)) {
        if (label[2].className === "error") {
            label[2].className += " is-visible";
            label[2].innerHTML = "请填写密码";
        }
    }
    for (var i = 0; i < label.length; i ++) {
        if (label[i].className === "error is-visible") {
            number += i;
            break;
        }
    }
    if (number !== null) {
        status = false;
    }
    // console.log(status);
    return false;
}
function is_hidden(get_name)
{
    var label = get_classs('error');
    if (label[get_name].className === "error is-visible") {
        label[get_name].className = "error";
    }
}