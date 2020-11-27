var urlToGetAllOpenBugs = "https://github.com/danthemanzx/crawl-custom-survival/issues?state=open&labels=bug";

$(document).ready(function () {
$.getJSON(urlToGetAllOpenBugs, function (allIssues) {
    $("div").append("found " + allIssues.length + " issues</br>");
    $.each(allIssues, function (i, issue) {
        $("div")
            .append("<b>" + issue.number + " - " + issue.title + "</b></br>")
            .append(issue.body + "</br></br></br>");
    });
});
});