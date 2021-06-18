class HelloWorld(object):
    def __init__(self, *args):
        super(HelloWorld, self).__init__(*args)

    # This method prints a greeting.
    # It takes one argument: the language to use.
    # Default language is English.
    def say_hello(self, language: str = 'English'):
        # Print a message specific to a language:
        if language == 'Vietnamese':
            print('Xin chào thế giới!')
        elif language == 'Dutch':
            print('Hallo, wereld!')
        elif language == 'French':
            print('Bonjour, monde!')
        elif language == 'German':
            print('Hallo, Welt!')
        elif language == 'Italian':
            print('Ciao, mondo!')
        elif language == 'Spanish':
            print('¡Hola, mundo!')
        else:
            print('Hello, world!')

    def say_name(self, name: str):
        print('My name is ' + name)


if __name__ == '__main__':
    greeting = HelloWorld()
    greeting.say_hello('Vietnamese')
    greeting.say_name('Viet')
