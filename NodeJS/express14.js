const express = require("express");
const app = express();

const port = process.env.port || 3000;

app.use((err, req, res, next) => {
    console.log("Error is "+err);
    res.status(500);
    res.send("Internal Server Error");
});

app.get("/", (req, res) => {
    throw new Error("Custome Error");
});


app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});