This is an additional output vehicle for the calculator system.  creating new output methods are easy
1. Create a composer package
2. The package must require paylease-output
3. in /src directory, create a folder with the folder name describing the type of output it will produce
   (if you are going to create an output that creates a csv, maybe call the folder 'Csv')
4. work should be under the namespace Output
5. class should implement IOutput and SPLObserver, so you must implement update() and output()
6. write unit tests
7. write code
8. commit code and push to github
9. add package to the paylease-calculator's composer.json to be included in the paylease-calculator
