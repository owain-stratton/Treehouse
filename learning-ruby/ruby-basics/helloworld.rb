# STRINGS
string = <<-STRING
This program will ask for your name
in order to greet you into the console
STRING
puts string

print "Please enter your name: "
name = gets

# Interpolates variable
puts "Hello #{name}!\n\tWelcome to the console environment"
puts %Q(Hello #{name}!\n\tWelcome to the console environment)

# Does NOT interpolate the variable
puts 'Hello #{name}!\n\tWelcome to the console environment'
puts %q(Hello #{name}!\n\tWelcome to the console environment)


# NUMBERS
a = 2
b = 2.6
c = a + b
c.class

a ** b #Exponent Operator
a % b #Modulus Operator (Remainder)
