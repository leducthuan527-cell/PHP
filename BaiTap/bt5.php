<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Receipt Upload Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-container {
            max-width: 700px; margin: auto; border: 1px solid #ccc;
            padding: 20px; border-radius: 10px;
        }
        h2 { text-align: center; }
        .row { display: flex; justify-content: space-between; margin-bottom: 15px; gap: 10px; }
        .row div { flex: 1; }

        .form-label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        }

        .checkbox-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; 
        gap: 10px 30px;
        }

        .checkbox-grid label {
        display: grid;
        grid-template-columns: auto 1fr; 
        align-items: start; 
        gap: 6px;
        max-width: 260px; 
        line-height: 1.4;
        cursor: pointer;
        }

        input, textarea { width: 100%; padding: 8px; box-sizing: border-box; }

        .file-box { border: 2px dashed #ccc; padding: 20px; text-align: center; margin-bottom: 15px; }
       button {
            display: block; margin: 0 auto; padding: 8px 20px; background: black;
            color: white; font-size: 14px; border: none; cursor: pointer; border-radius: 5px;
        }
        button:hover { opacity: 0.8; }

    </style>
</head>
<body>
<div class="form-container">
    <h2>Payment Receipt Upload Form</h2>
    <form action="process.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

        <div class="row">
            <div>
                <label class="form-label">First Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div>
                <label class="form-label">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
        </div>

        <div class="row">
            <div>
                <label class="form-label">Email</label>
                <input type="email" id="email" name="email" placeholder="example@example.com" required>
            </div>
            <div>
                <label class="form-label">Invoice ID</label>
                <input type="text" id="invoice_id" name="invoice_id" required>
            </div>
        </div>

        <p class="form-label">Pay For</p>
        <div class="checkbox-grid">
    <label><input type="checkbox" name="options[]" value="15K Category"> 15K Category</label>
    <label><input type="checkbox" name="options[]" value="35K Category"> 35K Category</label>
    <label><input type="checkbox" name="options[]" value="55K Category"> 55K Category</label>
    <label><input type="checkbox" name="options[]" value="75K Category"> 75K Category</label>
    <label><input type="checkbox" name="options[]" value="116K Category"> 116K Category</label>
    <label><input type="checkbox" name="options[]" value="Shuttle One Way"> Shuttle One Way</label>
    <label><input type="checkbox" name="options[]" value="Shuttle Two Ways"> Shuttle Two Ways</label>
    <label><input type="checkbox" name="options[]" value="Training Cap Merchandise"> Training Cap Merchandise</label>
    <label><input type="checkbox" name="options[]" value="Compressport T-Shirt Merchandise"> Compressport T-Shirt Merchandise</label>
    <label><input type="checkbox" name="options[]" value="Buf Merchandise"> Buf Merchandise</label>
    <label><input type="checkbox" name="options[]" value="Other"> Other</label>
    </div>
        <br>

        <p class="form-label">Please upload your payment receipt.</p>
        <div class="file-box">
            <input type="file" name="receipt" accept=".jpg,.jpeg,.png,.gif" required>
            <p><small>jpg, jpeg, png, gif (1MB max.)</small></p>
        </div>

        <p class="form-label">Additional Information</p>
        <textarea name="additional_info" rows="4" placeholder="Type here..."></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>

<script>
function validateForm() {
    let fileInput = document.querySelector('input[name="receipt"]');
    if(fileInput.files.length === 0) {
        alert("Please upload a payment receipt.");
        return false;
    }
    let fileSize = fileInput.files[0].size / 1024 / 1024;
    if(fileSize > 1) {
        alert("File size must be less than 1MB.");
        return false;
    }
    return true;
}
</script>
</body>
</html>

