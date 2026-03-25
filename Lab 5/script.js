document.getElementById("textForm").addEventListener("submit", function(e) {
    e.preventDefault(); // form reload বন্ধ করবে

    let text = document.getElementById("textInput").value;

    // Empty check
    if (text.trim() === "") {
        document.getElementById("result").innerHTML = "⚠️ Please enter some text!";
        return;
    }

    // Character count
    let charCount = text.length;

    // Word count (multiple space handle)
    let wordCount = text.trim().split(/\s+/).length;

    // Reverse text
    let reversedText = text.split("").reverse().join("");

    // Output
    document.getElementById("result").innerHTML = `
        <h3>Analysis Result</h3>
        <p><b>Total Characters:</b> ${charCount}</p>
        <p><b>Total Words:</b> ${wordCount}</p>
        <p><b>Reversed Text:</b> ${reversedText}</p>
    `;
});