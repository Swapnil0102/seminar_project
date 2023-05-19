app.get("/tryRec",async(req,res) => {
    const startTime = new Date();
  
    // Perform read operations

    // Perform update operations
    const updatePromises = [];
    for (let i = 0; i < 20; i++) {
      const promise = productCategoryModel.findByIdAndUpdate("62e7bebb95a7c5aa465cf691",{name:"yash"}); // Update the query and update operation as per your requirements
      updatePromises.push(promise);
    }
    await Promise.all(updatePromises);
  
    const endTime = new Date();
    console.log(`Workload completed in ${startTime} and ${endTime} milliseconds.`);
  })