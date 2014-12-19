/**
 * Created by thomas on 17/12/14.
 */

function HideFiles(selector)
{
    //show all files
    if(selector === "All files")
    {
        $("#files > a").show();
        return true;
    }
    else
    {
        //show only the selected filetype
        $("#files > a").hide();
        $("#files > a." + selector).show();
        return true;
    }
}

function prepareMenu()
{
    $("#menu a").click(
        function () {
            $("#menu a").each(
                function(){
                    $(this).removeClass("active");
                }
            );
            $(this).addClass("active");
            HideFiles($(this).children().html());
            return false;
        });

    //Select the first as default
    $("#menu a:first").click();
}

$(document).ready(function()
{
    prepareMenu();
});
