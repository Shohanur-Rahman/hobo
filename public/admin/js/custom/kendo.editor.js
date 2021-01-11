$(document).ready(function() {
	$(".kendo_editor").kendoEditor({
        /*stylesheets: [
            "../content/shared/styles/editor.css",
        ],*/
        resizable: true,
        tools: [
            "bold",
            "italic",
            "underline",
            "justifyLeft",
            "justifyCenter",
            "justifyRight",
            "insertUnorderedList",
            "createLink",
            "unlink",
            "insertImage",
            "tableWizard",
            "createTable",
            "addRowAbove",
            "addRowBelow",
            "addColumnLeft",
            "addColumnRight",
            "deleteRow",
            "deleteColumn",
            "mergeCellsHorizontally",
            "mergeCellsVertically",
            "splitCellHorizontally",
            "splitCellVertically",
            "formatting",
            {
                name: "fontName",
                items: [
                    { text: "Andale Mono", value: "Andale Mono" },
                    { text: "Arial", value: "Arial" },
                    { text: "Arial Black", value: "Arial Black" },
                    { text: "Book Antiqua", value: "Book Antiqua" },
                    { text: "Comic Sans MS", value: "Comic Sans MS" },
                    { text: "Courier New", value: "Courier New" },
                    { text: "Georgia", value: "Georgia" },
                    { text: "Helvetica", value: "Helvetica" },
                    { text: "Impact", value: "Impact" },
                    { text: "Symbol", value: "Symbol" },
                    { text: "Tahoma", value: "Tahoma" },
                    { text: "Terminal", value: "Terminal" },
                    { text: "Times New Roman", value: "Times New Roman" },
                    { text: "Trebuchet MS", value: "Trebuchet MS" },
                    { text: "Verdana", value: "Verdana" },
                ]
            },
            "fontSize",
            "foreColor",
            "backColor",
        ]
    });
});