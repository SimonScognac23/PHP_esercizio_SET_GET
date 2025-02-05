Nel codice che ho scritto, ho creato una struttura di classi per rappresentare una macchina e il suo numero di telaio. Ho definito due classi: una classe Car (che rappresenta una macchina) e una classe Fiat che estende Car, quindi ne eredita le caratteristiche.

Classe Car:

All'interno della classe Car, ho definito una proprietà privata $num_telaio che contiene il numero di telaio della macchina.
Ho creato due metodi protetti: setCarTelaio e getCarTelaio.
Il metodo setCarTelaio imposta il valore del numero di telaio, che viene passato come parametro.
Il metodo getCarTelaio restituisce il numero di telaio.
Classe Fiat:

La classe Fiat estende Car, quindi acquisisce tutte le proprietà e i metodi di Car.
Ho definito un costruttore che accetta due parametri: la targa e il nome della macchina, che vengono poi assegnati a proprietà protette $license e $name.
Ho creato due metodi per interagire con il numero di telaio:
Il metodo setMyCarTelaio richiama il metodo setCarTelaio della classe genitore per impostare il numero di telaio.
Il metodo getMyCarTelaio richiama il metodo getCarTelaio della classe genitore per ottenere il numero di telaio.
Infine, ho creato il metodo printMessage, che stampa un messaggio con il nome della macchina, la targa e il numero di telaio.
Uso delle classi:

Ho creato un oggetto Fiat con una targa e un nome di macchina (nel mio esempio, '12345678' per la targa e 'Punto' per il nome).
Ho impostato il numero di telaio della macchina usando il metodo setMyCarTelaio.
Infine, ho chiamato printMessage per visualizzare tutte le informazioni della macchina.

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

In the code I wrote, I created a class structure to represent a car and its chassis number. I defined two classes: a Car class (representing a car) and a Fiat class that extends Car, meaning it inherits the properties and methods of Car.

Car Class:

Inside the Car class, I defined a private property $num_telaio that holds the chassis number of the car.
I created two protected methods: setCarTelaio and getCarTelaio.
The setCarTelaio method sets the chassis number value, which is passed as a parameter.
The getCarTelaio method returns the chassis number.
Fiat Class:

The Fiat class extends Car, so it inherits all the properties and methods from Car.
I defined a constructor that accepts two parameters: the license plate and the car's name, which are assigned to protected properties $license and $name.
I created two methods to interact with the chassis number:
The setMyCarTelaio method calls the parent class's setCarTelaio method to set the chassis number.
The getMyCarTelaio method calls the parent class's getCarTelaio method to retrieve the chassis number.
Finally, I created the printMessage method, which prints a message with the car's name, license plate, and chassis number.
Using the classes:

I created a Fiat object with a license plate and a car name (in my example, '12345678' for the license plate and 'Punto' for the car's name).
I set the car's chassis number using the setMyCarTelaio method.
Finally, I called printMessage to display all the information about the car.
