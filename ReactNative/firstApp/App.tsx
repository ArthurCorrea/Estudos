import { StatusBar } from "expo-status-bar";
import { StyleSheet, Text, View } from "react-native";
import { Routes } from "./src/routes";
import { Header } from "./src/components/Header";
import { Home } from "./src/views/Home";
import { Icons } from "./src/views/Icons";

export default function App() {
  return (
    <>
      <Routes />
    </>
  );
}

// const styles = StyleSheet.create({
//   container: {
//     flex: 1,
//     backgroundColor: "#f0f0f0",
//     alignItems: "center",
//     justifyContent: "center",
//   },
// });
