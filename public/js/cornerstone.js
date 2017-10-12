function get_style(el)
{
    var obj = el;
    var style = null;
    if (window.getComputedStyle) {
        style = window.getComputedStyle(obj, null);    // 非IE
    } else {
        style = obj.currentStyle;  // IE
    }
    return style;
}
function get_id(get_id)
{
    return document.getElementById(get_id);
}
function get_classs(get_class)
{
    return document.getElementsByClassName(get_class);
}
function is_true_and_false(result)
{
    return result ? true : false;
}