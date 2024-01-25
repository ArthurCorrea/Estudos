import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from '@react-navigation/native-stack'
import { Home } from "../views/Home";
import { Icons } from "../views/Icons";
import { Lists } from "../views/Lists";

const Stack = createNativeStackNavigator();

export const Routes = () => {
    return(
        <NavigationContainer>
            <Stack.Navigator>
                <Stack.Screen name='Home' component={Home} options={{
                    headerTitle: 'Bem-vindo!'
                }} />
                <Stack.Screen name='Icons' component={Icons}/>
                <Stack.Screen name='Lists' component={Lists}/>
            </Stack.Navigator>
        </NavigationContainer>
    )
}